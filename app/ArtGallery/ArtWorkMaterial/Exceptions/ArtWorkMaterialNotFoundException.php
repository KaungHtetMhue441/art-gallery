<?php

namespace App\ArtGallery\ArtWorkMaterial\Exceptions;

use Exception;

class ArtWorkMaterialNotFoundException extends Exception
{
    public function __construct()
    {
        parent::__construct('Artwork Material Not Fond', 404);
    }

}
