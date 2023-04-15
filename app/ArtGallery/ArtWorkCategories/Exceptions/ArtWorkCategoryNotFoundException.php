<?php

namespace App\ArtGallery\ArtWorkCategories\Exceptions;

use Exception;

class ArtWorkCategoryNotFoundException extends Exception
{
    public function __construct()
    {
        parent::__construct('Artwork Category Not Fond', 404);
    }

}
