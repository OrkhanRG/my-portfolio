<?php

use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\File\UploadedFile;
function fileUpload(UploadedFile $file, $filePath, $name=null)
{
    $extension = '.'.$file->getClientOriginalExtension();

    if (!is_null($name))
    {
        $name = Str::slug($name).'-'.date('YmdHis').$extension;
    }
    else
    {
        $name = Str::slug(str_replace($extension, '', $file->getClientOriginalName())).'-'.date('YmdHis').$extension;
    }
    $path = $filePath;
    $file->move(public_path($path), $name);

    return $path.$name;
}
