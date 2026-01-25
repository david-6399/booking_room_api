<?php

namespace App\Services\Room;

use App\Http\Requests\StoreroomRequest;
use App\Http\Resources\roomResource;
use App\Models\Room;
use App\Services\Basics\UploadImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CreateRoom
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected UploadImages $uploader)
    {
        //
    }

    public function execute($data, $images = null){

        $FilesUploadFailed = false ;
        
        $room = DB::transaction(function () use ($data, $images, &$FilesUploadFailed) {
            $hostelId = $data['hostel_id'] ?? auth()->user()->hostel->id;
            $room = Room::create([...$data, 'hostel_id' => $hostelId]);
            
            if (!empty($images)) {
                try{  
                    $this->uploader->upload($images, $room, 'roomImages');
                    
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
