<?php

namespace App\Http\Controllers\v1;

use App\bookingStatus;
use App\CreateNewBooking;
use App\Http\Controllers\Controller;
use App\Models\booking;
use App\Http\Requests\StorebookingRequest;
use App\Http\Requests\UpdatebookingRequest;
use App\Http\Resources\bookingResource;
use App\Jobs\changeRoomStatusToAvailableJob;
use App\Models\room;
use App\paymentStatus;
use App\printAllReservations;
use App\roomStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(
        protected printAllReservations $printAllReservations,
        protected CreateNewBooking $createNewBooking
    ){}

    public function index(Request $request)
    {
        $reservations = $this->printAllReservations->print($request) ;
        return $reservations ;       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorebookingRequest $request)
    {
        // check availibility + user + room + check in date + check out date
        
        return $this->createNewBooking->createBooking($request);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebookingRequest $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(booking $booking)
    {
        //
    }

    public function confirm(booking $id)
    {
        if($id->status === bookingStatus::CONFIRMED->value){  
            return response()->json([
                'message' => 'Booking is already confirmed'
            ], 400);
        }

        if($id->check_out_date <= now())
        {    
            $id->update([
                'status' => bookingStatus::CANCELED->value,
                'payment_status' => paymentStatus::FAILED->value
            ]);

            return response()->json([
                'message' => 'your booking check-out date has already passed'
            ], 400);    
        }

        Db::transaction(function () use ($id) {
            $id->update([
                'status' => bookingStatus::CONFIRMED->value,
                'payment_status' => paymentStatus::COMPLETED->value
            ]);

            $room = room::find($id->room_id);
            $room->update([
                'status' => roomStatus::AVAILABLE->value
            ]);
        });

        return response()->json([
            'message' => 'Booking confirmed successfully',
            'booking' => bookingResource::make($id)
        ], 200);
    }

    public function checkIn(booking $id)
    {
        if($id->check_out_date <= now())
        {    
            $id->update([
                'status' => bookingStatus::CANCELED->value,
                'payment_status' => paymentStatus::FAILED->value
            ]);

            return response()->json([
                'message' => 'your booking check-out date has already passed'
            ], 400);    
        }
        Db::transaction(function () use ($id) {
            $id->update([
                'status' => bookingStatus::CHECKED_IN->value,
            ]);

            $room = room::find($id->room_id);
            $room->update([
                'status' => roomStatus::OCCUPIED->value
            ]);
        });
        return response()->json([
            'message' => 'Booking checked in successfully',
            'booking' => bookingResource::make($id)
        ], 200);
    }

    public function checkOut(booking $id)
    {
        if($id->status !== bookingStatus::CHECKED_IN->value){  
            $id->update([
                'status' => bookingStatus::CANCELED->value,
                'payment_status' => paymentStatus::FAILED->value
            ]);

            return response()->json([
                'message' => 'Booking is not checked in'
            ], 400);
        }

        if($id->sattaus === bookingStatus::CHECKED_OUT->value){  
            return response()->json([
                'message' => 'Booking is already checked out'
            ], 400);
        }

        if($id->status === bookingStatus::CHECKED_IN->value )
        {
            Db::transaction(function () use ($id) {
                $id->update([
                    'status' => bookingStatus::CHECKED_OUT->value,
                ]);
    
                $room = room::find($id->room_id);
                $room->update([
                    'status' => roomStatus::MAINTENANCE->value  // after certain period of time change to available 
                ]);
                changeRoomStatusToAvailableJob::dispatch($room->id)->delay(now()->addHour(12));
            });
            return response()->json([
                'message' => 'Booking checked out successfully',
                'booking' => bookingResource::make($id)
            ], 200);
        }

    }
}
