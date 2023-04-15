<?php

namespace App\ArtGallery\ArtWorkMedium\Exceptions;

use Exception;

class ArtWorkMediumNotFoundException extends Exception
{
    public function __construct()
    {
        parent::__construct('Artwork Medium Not Fond', 404);
    }

}
