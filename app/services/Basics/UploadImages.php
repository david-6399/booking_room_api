<?php

namespace App\Services\Basics;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Spatie\MediaLibrary\HasMedia;

class UploadImages
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        
    }

    public function upload(
            UploadedFile | array $files,
            Model&HasMedia $model,
            string $collection,
            bool $clearOld = false
         ){

        if (empty($files)) {
            return;
        }

        $files = is_array($files) ? $files : [$files];  

        if($clearOld == true){
            $model->clearMediaCollection($collection);
        }

        foreach($files as $file){
            $model->addMedia($file->getRealPath())
            ->usingFileName($file->getClientOriginalName())
            ->toMediaCollection($collection);
        }
    }
}
