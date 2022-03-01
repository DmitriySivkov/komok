<?php


namespace App\Services;


use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ResizeService
{
    public static function resize($path, $resizeDisk, $width, $height, $encode = 'jpg')
    {
        $img = Image::make($path);
        $resize = $img->resize($width, $height)->encode('jpg');
        $hash = md5($resize->__toString());
        $resizePath = "resize/{$hash}.jpg";
        $resize->save(Storage::path($resizeDisk . '/' . $resizePath));
        return $resizePath;
    }
}
