<?php

namespace App\services;

use App\Enums\bookingStatus;
use App\Http\Resources\bookingResource;
use App\Jobs\changeRoomStatusToAvailableJob;
use App\Models\Room;
use App\Enums\paymentStatus;
use App\Enums\roomStatus;
use Illuminate\Support\Facades\DB;

class checkOutBooking
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function checkOut($id)
    {
        // pending  confirmed  checked-in  checked-out  canceled
        if ($id->status === bookingStatus::CONFIRMED->value || $id->status === bookingStatus::PENDING->value) {
            
            $id->update([
                'status' => bookingStatus::CANCELED->value,
                'payment_status' => paymentStatus::FAILED->value
            ]);

            return response()->json([
                'message' => 'Booking is not checked in, Booking canceled successfully'
            ], 400);
        }

        if($id->status === bookingStatus::CHECKED_OUT->value) {if($id->status === bookingStatus::CHECKED_OUT) {
            return response()->json([
                'message' => 'Booking is already checked out'
            ], 400);
        }
            return response()->json([
                'message' => 'Booking is already checked out'
            ], 400);
        }

        if ($id->status === bookingStatus::CHECKED_IN->value) {
            DB::transaction(function () use ($id) {
                $id->update([
                    'status' => bookingStatus::CHECKED_OUT->value,
                ]);

                $room = Room::find($id->room_id);
                $room->update([
                    'status' => roomStatus::MAINTENANCE->value  // after certain period of time change to available 
                ]);
                changeRoomStatusToAvailableJob::dispatch($room->id)->delay(now()->addMinutes(120));
            });
            return response()->json([
                'message' => 'Booking checked out successfully',
                'booking' => bookingResource::make($id)
            ], 200);
        }
    }
}
