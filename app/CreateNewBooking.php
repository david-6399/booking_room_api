<?php

namespace App;

use App\Enums\roomStatus;
use App\Http\Resources\bookingResource;
use App\Models\booking;
use App\Models\room;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class CreateNewBooking
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
    }

    public function create($data)
    {
        return DB::transaction(function () use ($data) {

            
            $room = Room::lockForUpdate()->find($data['room_id']);
            
            if (! $room) {
                throw ValidationException::withMessages([
                    'room_id' => 'Room not found',
                ]);
            }

            if ($room->status !== roomStatus::AVAILABLE) {
                throw ValidationException::withMessages([
                    'room_id' => 'Room is not available',
                ]);
            }

            $conflicts = Booking::where('room_id', $data['room_id'])
                ->where(function ($query) use ($data) {
                    $query->where('check_in_date', '<', $data['check_out_date'])
                        ->where('check_out_date', '>', $data['check_in_date']);
                })
                ->lockForUpdate()
                ->exists();

            if ($conflicts) {
                throw ValidationException::withMessages([
                    'dates' => 'Dates overlap with an existing booking',
                ]);
            }

            $price = $room->price_per_night;
            

            $data['status'] = 'pending';
            $data['hostel_id'] = $room->hostel_id;
            $data['payment_status'] = 'pending';
            $data['total_amount'] = $price * ((strtotime($data['check_out_date']) - strtotime($data['check_in_date'])) / 86400);
            return Booking::create($data);  
        });
    }
    
}
