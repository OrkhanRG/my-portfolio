<?php

use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\File\UploadedFile;
function imgUpload(UploadedFile $file)
{
    $extension = '.'.$file->getClientOriginalExtension();
    $name = Str::slug(str_replace($extension, '', $file->getClientOriginalName())).'-'.date('YmdHis').$extension;
    $path = 'assets/img/';
    $file->move(public_path($path), $name);

    return $path.$name;
}
