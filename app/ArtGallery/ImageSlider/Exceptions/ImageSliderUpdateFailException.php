<?php

namespace App\ArtGallery\ImageSlider\Exceptions;

use Exception;

class ImageSliderUpdateFailException extends Exception
{
    public function __construct()
    {
        parent::__construct('Image Update Fail.', 400);
    }

}
