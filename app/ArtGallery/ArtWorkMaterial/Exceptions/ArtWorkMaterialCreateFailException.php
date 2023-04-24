<?php

namespace App\ArtGallery\ArtWorkMaterial\Exceptions;

use Exception;

class ArtWorkMaterialCreateFailException extends Exception
{
    public function __construct()
    {
        parent::__construct('Artwork Material create Fail.', 400);
    }

}
