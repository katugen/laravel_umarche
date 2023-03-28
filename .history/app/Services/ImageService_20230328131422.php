<?php

namespace App\Services;

class ImageService
{
    public static function upload($imageFile, $folderName)
    {
        $fileName = uniqid(rand() . '_');
        $extension = $imageFile->extension();
        $fileNameToStore = $fileName . '.' . $extension;
        $resizedImage = InterventionImage::make($imageFile)->resize(1920, 1080)->encode();
        Storage::put('public/$folderName.'/' . $fileNameToStore, $resizedImage);

        return  $fileNameToStore;
    }
}
