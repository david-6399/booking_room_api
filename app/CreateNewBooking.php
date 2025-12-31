<?php

namespace App;

use App\Enums\roomStatus;
use App\Http\Resources\bookingResource;
use App\Models\booking;
use App\Models\room;
use Illuminate\Support\Facades\DB;

class CreateNewBooking
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
    }

    public function createBooking($request)
    {

        DB::beginTransaction();
        try {

            $room = room::find($request->room_id)->lockForUpdate()->first();

            if (!$room) {
                DB::rollBack();
                return response()->json([
                    'message' => 'Room not found'
                ], 404);
            }
            // dd(roomStatus::AVAILABLE->value);
            if ($room->status != roomStatus::AVAILABLE->value) {
                DB::rollBack();
                return response()->json([
                    'message' => 'Room is not available for booking'
                ], 400);
            }

            $conflicts = booking::where('room_id', $request->room_id)
                ->where(function ($query) use ($request) {
                    $query->where('check_in_date', '<', $request->check_out_date)
                        ->where('check_out_date', '>', $request->check_in_date);
                })->lockForUpdate()->get();

            if ($conflicts->count() > 0) {
                DB::rollBack();
                return response()->json([
                    'message' => 'Dates overlap with an existing booking.',
                    'conflicts' => bookingResource::collection($conflicts)
                ], 409);
            }
        
            $room_price_per_night = room::find($request->room_id)->roomType->price_per_night;
            
            $bookingData = $request->validated();
            
            $bookingData['status'] = 'pending';
            $bookingData['hostel_id'] =  room::find($request->room_id)->hostel->id;
            $bookingData['payment_status'] = 'pending';
            $bookingData['total_amount'] = $room_price_per_night * ((strtotime($request->check_out_date) - strtotime($request->check_in_date)) / (60 * 60 * 24));

            $booking = booking::create($bookingData);

            DB::commit();
            
            return response()->json([
                'message' => 'Booking created successfully',
                'booking' => bookingResource::make($booking)
            ], 201);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => 'Failed to create booking',
                'error' => $e->getMessage()
            ], 500);        
        }
    }
}
