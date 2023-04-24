<?php

namespace App\ArtGallery\ArtWorkMedium\Exceptions;

use Exception;

class ArtWorkMediumUpdateFailException extends Exception
{
    public function __construct()
    {
        parent::__construct('Artwork Medium Update Fail.', 400);
    }

}
