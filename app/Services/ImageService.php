<?php

namespace App\Services;

use Carbon\Carbon;

/**
 * Class ImageService.
 */
class ImageService
{
    public function move($image){
        $imageName = time() . "." . $image->extension();
        $image->storeAs('public/', $imageName);
        return $imageName;
    }
}
