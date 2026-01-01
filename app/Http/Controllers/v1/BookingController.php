<?php

namespace App\Http\Controllers\v1;

use App\Enums\bookingStatus;
use App\CreateNewBooking;
use App\Http\Controllers\Controller;

use App\Http\Requests\StorebookingRequest;
use App\Http\Requests\UpdatebookingRequest;
use App\Http\Resources\bookingResource;
use App\Jobs\changeRoomStatusToAvailableJob;
use App\Models\Booking;
use App\Models\Room;
use App\Enums\paymentStatus;
use App\printAllReservations;
use App\Enums\roomStatus;
use App\Services\checkInBooking;
use App\Services\checkOutBooking;
use App\Services\confirmBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(
        protected printAllReservations $printAllReservations,
        protected CreateNewBooking $createNewBooking,
        protected confirmBooking $confirmBooking,
        protected checkInBooking $checkInBooking,
        protected checkOutBooking $checkOutBooking
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
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebookingRequest $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }

    public function confirm(Booking $id)
    {
        return $this->confirmBooking->confirm($id);
    }

    public function checkIn(Booking $id)
    {
        return $this->checkInBooking->checkIn($id);
    }

    public function checkOut(Booking $id)
    {
        return $this->checkOutBooking->checkOut($id);

    }
}
