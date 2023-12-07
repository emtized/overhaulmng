<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Plank\Mediable\Facades\MediaUploader;
use Image;

trait ImageTrait
{
    public function verifyAndUpload(Request $request, $fieldname = 'image', $directory = 'images' )
    {

        if( $request->hasFile( $fieldname ) ) {

            if (!$request->file($fieldname)->isValid()) {

                return redirect()->back()->withInput();

            }
            $media = MediaUploader::fromSource($request->file($fieldname))
                ->useHashForFilename()
                ->toDestination('public', $directory.'/')
                ->upload();
            $image = Image::make(public_path('storage/'.$media->getDiskPath()))->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path('storage/'.$directory.'/thumb_small_'.$media->filename.'.'.$media->extension));

            $image = Image::make(public_path('storage/'.$media->getDiskPath()))->resize(300, 300, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path('storage/'.$directory.'/thumb_medium_'.$media->filename.'.'.$media->extension));

            $image = Image::make(public_path('storage/'.$media->getDiskPath()))->resize(1024, 1024, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path('storage/'.$directory.'/thumb_large_'.$media->filename.'.'.$media->extension));


            return $media;

        }

       Log::error("Images Trait Fail:",$fieldname);

        return null;

    }

    public function multipleUpload($files, $directory = 'images')
    {
        foreach($files as $file) {

            $media = MediaUploader::fromSource($file)
                ->useHashForFilename()
                ->toDestination('public', $directory.'/')
                ->upload();

            $image = Image::make(public_path('storage/'.$media->getDiskPath()))->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path('storage/'.$directory.'/thumb_small_'.$media->filename.'.'.$media->extension));

            $image = Image::make(public_path('storage/'.$media->getDiskPath()))->resize(300, 300, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path('storage/'.$directory.'/thumb_medium_'.$media->filename.'.'.$media->extension));

            $image = Image::make(public_path('storage/'.$media->getDiskPath()))->resize(1024, 1024, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path('storage/'.$directory.'/thumb_large_'.$media->filename.'.'.$media->extension));

            $uploaded[]= $media;

        }
        return $uploaded;

    }

}
