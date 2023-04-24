<?php

namespace App\ArtGallery\ArtWorkCategories\Exceptions;

use Exception;

class ArtWorkCategoryCreateFailException extends Exception
{
    public function __construct()
    {
        parent::__construct('Artwork Category create Fail.', 400);
    }

}
