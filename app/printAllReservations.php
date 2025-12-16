<?php

namespace App;

use App\Http\Resources\bookingResource;
use App\Models\booking;
use Illuminate\Http\Request;

class printAllReservations
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected filter $filter)
    {
        
    }

    public function print(Request $request){
        //filter by 
        
        
        $roleName = auth()->user()->getRoleNames()->first();
        
        if($roleName === "admin"){
            $allBookings = $this->filter->fillterBookings($request);
            return bookingResource::collection($allBookings);

        }else{

            $userId = auth()->user()->id;

            $request->merge(['user_id' => $userId]);    
            //add mesage if there is no booking for user
            if(booking::where('user_id', $userId)->count() === 0){
                return response()->json([
                    'message' => 'No bookings found .'
                ], 404);
            }
            $userBookings = $this->filter->fillterBookings($request);

            return bookingResource::collection($userBookings);

        }
    }
}
