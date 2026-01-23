<?php

namespace App\Services\Room;

use App\Http\Requests\StoreroomRequest;
use App\Http\Resources\roomResource;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CreateRoom
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function execute($data, $images = null){

        $FilesUploadFailed = false ;
        
        $room = DB::transaction(function () use ($data, $images, &$FilesUploadFailed) {

            $room = Room::create([...$data, 'hostel_id' => auth()->user()->hostel->id]);
        
            if (!empty($images)) {
                try{  
                    foreach ($images as $image) {
                        $room->addMedia($image)->toMediaCollection('roomImages');
                }
                    
                }catch(\Exception $e){
                    $FilesUploadFailed = true ;
                    Log::error('Image upload failed for room ID ', [
                        'room_id' => $room->id,
                        'error' => $e->getMessage()
                    ]);
                }
            }
            return $room;
        });
        
        
        return [
            'room' => $room,
            'FilesUploadFailed' => $FilesUploadFailed
        ];
    
    }
}
