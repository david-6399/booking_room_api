<?php

namespace App\Services\Hostel;

use App\Http\Requests\StorehostelRequest;
use App\Http\Resources\hostelResource;
use App\Models\Hostel;
use App\Services\Basics\UploadImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CreateHostel
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected UploadImages $uploader)
    {
        
    }

        public function execute($data, $images){
            
            $FilesUploadFailed = false ;
            

            $hostel = DB::transaction(function() use ($data,$images, &$FilesUploadFailed){
                
                $hostel = Hostel::create($data);
        
                if ($images) {
                    try{
                        $this->uploader->upload($images,$hostel, 'hostelImages');

                        // foreach ($request->file('images') as $image) {
                        //     $hostel->addMedia($image)->toMediaCollection('hostelImages');
                        // }

                    }catch(\Exception $e){
                        $FilesUploadFailed = true ;
                        Log::error('Hostel Images upload failed',[
                            'error' => $e,
                            'hostel_id' => $hostel->id
                        ]);
                    }
                }  
                return $hostel;  
            });
            

            return [
                'hostel' => $hostel->refresh(),
                'FilesUploadFailed' => $FilesUploadFailed
            ];

            
        }
}
