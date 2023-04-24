<?php

namespace App\ArtGallery\ArtWorkCategories\Exceptions;

use Exception;

class ArtWorkCategoryDeleteFailException extends Exception
{
    public function __construct()
    {
        parent::__construct('Artwork Category Delete Fail.', 400);
    }

}
