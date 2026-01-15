<?php

namespace App\Services;

use App\Enums\bookingStatus;
use App\Http\Resources\bookingResource;
use App\Models\Room;
use App\Enums\paymentStatus;
use App\Enums\roomStatus;   
use Illuminate\Support\Facades\DB;

class confirmBooking
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function confirm($id)
    {
        if ($id->status === bookingStatus::CONFIRMED->value) {
            return response()->json([
                'message' => 'Booking is already confirmed'
            ], 400);
        }

        if ($id->status === bookingStatus::CHECKED_OUT->value) {
            return response()->json([
                'message' => 'This booking has already been checked out'
            ], 400);
        }

        if ($id->status === bookingStatus::CANCELED->value) {
            return response()->json([
                'message' => 'This booking has been canceled and cannot be confirmed'
            ], 400);
        }

        if ($id->status === bookingStatus::CHECKED_IN->value) {
            return response()->json([
                'message' => 'This booking has already been checked in'
            ], 400);
        }

        if ($id->check_out_date <= now()) {
            $id->update([
                'status' => bookingStatus::CANCELED->value,
                'payment_status' => paymentStatus::FAILED->value
            ]);

            return response()->json([
                'message' => 'your booking check-out date has already passed'
            ], 400);
        }

        DB::transaction(function () use ($id) {
            $id->update([
                'status' => bookingStatus::CONFIRMED->value,
                'payment_status' => paymentStatus::COMPLETED->value
            ]);

            $room = Room::find($id->room_id);
            $room->update([
                'status' => roomStatus::OCCUPIED->value
            ]);
        });

        return bookingResource::make($id);          
    }
}
