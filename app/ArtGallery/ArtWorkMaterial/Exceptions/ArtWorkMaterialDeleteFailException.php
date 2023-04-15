<?php

namespace App\ArtGallery\ArtWorkMaterial\Exceptions;

use Exception;

class ArtWorkMaterialDeleteFailException extends Exception
{
    public function __construct()
    {
        parent::__construct('Artwork Material Delete Fail.', 400);
    }

}
