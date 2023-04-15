<?php

namespace App\ArtGallery\ArtWorkMaterial\Exceptions;

use Exception;

class ArtWorkMaterialUpdateFailException extends Exception
{
    public function __construct()
    {
        parent::__construct('Artwork Material Update Fail.', 400);
    }

}
