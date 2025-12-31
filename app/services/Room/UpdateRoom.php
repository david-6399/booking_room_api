<?php

namespace App\Services\Room;

use App\Http\Requests\UpdateroomRequest;
use App\Http\Resources\roomResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UpdateRoom
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function execute(UpdateroomRequest $request, $room)
    {
        $FilesUploadFailed = false;

        $data = $request->validated();
        $room->update($data);

        if ($request->hasFile('images')) {
            try {
                foreach ($request->file('images') as $image) {
                    $room->addMedia($image)->toMediaCollection('roomImages');
                }
            } catch (\Exception $e) {
                $FilesUploadFailed = true;
                Log::error('Image upload failed for room ID ', [
                    'room_id' => $room->id,
                    'error' => $e->getMessage()
                ]);
            }
        }

        return [
            'room' => $room->refresh(),
            'filesUploadFailed' => $FilesUploadFailed
        ];

    }
}
