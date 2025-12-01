<?php

namespace App\Http\Controllers\v1;

use App\filterRoom;
use App\Http\Controllers\Controller;
use App\Models\room;
use App\Http\Requests\StoreroomRequest;
use App\Http\Requests\UpdateroomRequest;
use App\Http\Resources\roomResource;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(protected filterRoom $filterRoom)
    {
        
    }

    public function index(Request $request)
    {
        $filter = $request->only(['status','room_type','capacity']);

        $rooms = $this->filterRoom->filterRooms($filter)->paginate(2);  


        return roomResource::collection($rooms);
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
