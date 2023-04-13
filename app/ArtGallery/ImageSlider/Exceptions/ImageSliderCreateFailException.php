<?php

namespace App\ArtGallery\ImageSlider\Exceptions;

use Exception;

class ImageSliderCreateFailException extends Exception
{
    public function __construct()
    {
        parent::__construct('Image create Fail.', 400);
    }

}
