<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;

use App\Http\Requests\Storeroom_typeRequest;
use App\Http\Requests\Updateroom_typeRequest;
use App\Http\Resources\roomTypeResource;
use App\Models\Room_type;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return roomTypeResource::collection(Room_type::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storeroom_typeRequest $request)
    {
        $hostelId = auth()->user()->hostel->id;
        $validatedData = $request->validated();
        
        $roomType = Room_type::create([
            ...$validatedData,
            'hostel_id' => $hostelId
        ]);

        return response()->json([
            'message' => 'Room Type created successfully',
            'data' => new roomTypeResource($roomType)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Room_type $room_type)
    {
        return response()->json([
            'data' => new roomTypeResource($room_type)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room_type $room_type) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateroom_typeRequest $request, Room_type $room_type)
    {
        $data = $request->validated();
        $room_type->update($data);
        return response()->json([
            'message' => 'Room Type updated successfully',
            'data' => new roomTypeResource($room_type)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room_type $room_type)
    {
        $room_type->delete();
        return response()->json(['message' => 'Room Type deleted successfully.']);
    }
}
