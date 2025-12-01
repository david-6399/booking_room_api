<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\room;
use App\Http\Requests\StoreroomRequest;
use App\Http\Requests\UpdateroomRequest;
use App\Http\Resources\roomResource;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return roomResource::collection(room::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreroomRequest $request)
    {
        $data = $request->validated();
        $room = room::create($data);
        return new roomResource($room);
    }

    /**
     * Display the specified resource.
     */
    public function show(room $room)
    {
        return new roomResource($room);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateroomRequest $request, room $room)
    {
        $data = $request->validated();
        $room->update($data);
        return new roomResource($room);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(room $room)
    {
        $room->delete();
        return response()->json(['message' => 'Room deleted successfully.']);
    }
}
