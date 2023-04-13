<?php

namespace App\ArtGallery\ArtWorkCategories\Exceptions;

use Exception;

class ArtWorkCategoryUpdateFailException extends Exception
{
    public function __construct()
    {
        parent::__construct('Artwork Category Update Fail.', 400);
    }

}
