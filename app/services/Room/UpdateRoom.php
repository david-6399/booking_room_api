<?php

namespace App\Services\Room;

use App\Http\Requests\UpdateroomRequest;
use App\Http\Resources\roomResource;
use App\Models\Room;
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

    public function execute($data, $id, $images)
    {

        $FilesUploadFailed = false;
        $room = Room::find($id);

        $room->update($data);   
        if (!empty($images)) {
            try {
                foreach ($images as $image) {
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
