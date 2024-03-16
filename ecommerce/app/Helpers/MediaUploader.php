<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

trait MediaUploader{
    function uploadSingleMedia($file,$fileName,$dirName,$old = null,$accessibility ='public'){
        if($file){

            if($old){
              Storage::disk($accessibility)->delete($old);
            }

            $fileName = "$fileName.". $file->getClientOriginalExtension();
            $mediaPath = $file->storeAs($dirName,$fileName,$accessibility);
            return $mediaPath;
        }
    }

    function uploadMultipleMedia(){

    }
}









?>