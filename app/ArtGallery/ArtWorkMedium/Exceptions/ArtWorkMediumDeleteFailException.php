<?php

namespace App\ArtGallery\ArtWorkMedium\Exceptions;

use Exception;

class ArtWorkMediumDeleteFailException extends Exception
{
    public function __construct()
    {
        parent::__construct('Artwork Medium Delete Fail.', 400);
    }

}
