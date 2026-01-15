<?php

namespace App\Services\Hostel;

use App\Http\Requests\UpdatehostelRequest;
use App\Http\Resources\hostelResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UpdateHostel
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function execute(UpdatehostelRequest $request, $hostel)
    {
        $FilesUploadFailed = false;
        $data = $request->validated();
        $hostel->update($data);
        // dd($hostel); 

        if ($request->hasFile('images')) {
            try {

                foreach ($request->file('images') as $image) {
                    $hostel->addMedia($image)->toMediaCollection('hostelImages');
                }
            } catch (\Exception $e) {
                $FilesUploadFailed = true;

                Log::error('Image upload failed during hostel update: ' ,[
                    'hostel_id' => $hostel->id,
                    'error' => $e->getMessage()
                ]);
            }
        }

        return [
            'data' => $hostel->refresh(),
            'FilesUploadFailed' => $FilesUploadFailed
        ];
        
    }
}
