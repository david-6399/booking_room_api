<?php

namespace App\Http\Controllers\v1;

use App\filter;
use App\Http\Controllers\Controller;

use App\Http\Requests\StoreroomRequest;
use App\Http\Requests\UpdateroomRequest;
use App\Http\Resources\hostelResource;
use App\Http\Resources\roomResource;
use App\Models\Room;
use App\Services\Room\CreateRoom;
use App\Services\Room\UpdateRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(
        protected filter $filter,
        protected CreateRoom $createRoom,
        protected UpdateRoom $updateRoom
    ){
         
    }

    public function index(Request $request)
    {
        $filter = $request->only(['status','room_type','capacity']);

        $rooms = $this->filter->filter($request)->paginate(10);      

        
        return response()->json([
            'data' => roomResource::collection($rooms),
            'meta' => [
                'current_page' => $rooms->currentPage(),
                'last_page' => $rooms->lastPage(),
                'per_page' => $rooms->perPage(),
                'total' => $rooms->total(),
            ],
        ]);
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
        
        $result = $this->createRoom->execute($request);
        
        return response()->json([
            'message' => $result['FilesUploadFailed']
                ? 'Room created successfully, but some images failed to upload'
                : 'Room created successfully',
            'data' => new roomResource($result['room'])
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return response()->json([
            'data' => new roomResource($room)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateroomRequest $request, room $room)
    {
        $result = $this->updateRoom->execute($request, $room);
        return response()->json([
            'data' => new roomResource($result['room']),
            'filesUploadFailed' => $result['filesUploadFailed'] ? 'Some images failed to upload.' : 'All images uploaded successfully.'
        ]);
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
