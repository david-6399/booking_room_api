<?php

namespace App;

use App\Models\room;

class filterRoom
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function filterRooms(array $filters)
    {
        $query = room::query();

        if (isset($filters['status'])) {
            $query->where('status', $filters['status']);
        }

        if(isset($filters['room_type'])){
            $query->where('room_type_id', $filters['room_type']);
        }

        if(isset($filters['capacity'])){
            $query->where('capacity', '=', $filters['capacity']);
        }

        

        return $query;
    }
}
