<?php

namespace App\ArtGallery\ImageSlider\Exceptions;

use Exception;

class ImageSliderDeleteFailException extends Exception
{
    public function __construct()
    {
        parent::__construct('Image Delete Fail.', 400);
    }

}
