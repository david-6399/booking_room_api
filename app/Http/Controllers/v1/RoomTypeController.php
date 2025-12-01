<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\room_type;
use App\Http\Requests\Storeroom_typeRequest;
use App\Http\Requests\Updateroom_typeRequest;
use App\Http\Resources\roomTypeResource;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return roomTypeResource::collection(room_type::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storeroom_typeRequest $request)
    {
        $validatedData = $request->validated();
        $roomType = room_type::create($validatedData);
        return new roomTypeResource($roomType);
    }

    /**
     * Display the specified resource.
     */
    public function show(room_type $room_type)
    {
        return new roomTypeResource($room_type);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(room_type $room_type)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateroom_typeRequest $request, room_type $room_type)
    {
        $data = $request->validated();
        $room_type->update($data);
        return new roomTypeResource($room_type);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(room_type $room_type)
    {
        $room_type->delete();
        return response()->json(['message' => 'Room Type deleted successfully.']);
    }
}
