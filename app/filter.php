<?php

namespace App;

use App\Models\Booking;
use App\Models\Room ;

class filter
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function filter($request)
    {
        $query = Room::query();

        if ($request->status) {
            $query->where('status', $request->status);
        }

        if($request->room_type){
            $query->where('room_type_id', $request->room_type);
        }

        if($request->capacity){
            $query->where('capacity', '=', $request->capacity);
        }

        return $query;
    }

    public function fillterBookings($request)
    {
        $query = Booking::query();

        if ($request->status) {
            $query->where('status', $request->status);
        }

        if($request->payment_status){
            $query->where('payment_status', $request->payment_status);
        }

        if ($request->user_id) {
            $query->where('user_id', $request->user_id);
        }

        if ($request->check_in_date) {
            $query->where('check_in_date', $request->check_in_date);
        }

        return $query->get();
    }
}
