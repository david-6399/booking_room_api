<?php

namespace App\Services\Hostel;

use App\Http\Requests\StorehostelRequest;
use App\Http\Resources\hostelResource;
use App\Models\Hostel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CreateHostel
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        
    }

        public function execute(StorehostelRequest $request){
            
            $FilesUploadFailed = false ;
            

            $hostel = DB::transaction(function() use ($request, &$FilesUploadFailed){
                
                $data = $request->validated();
                $hostel = Hostel::create($data);
        
                if ($request->hasFile('images')) {
                    try{
                        
                        foreach ($request->file('images') as $image) {
                            $hostel->addMedia($image)->toMediaCollection('hostelImages');
                        }

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
