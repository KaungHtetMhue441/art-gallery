<?php

namespace App\ArtGallery\ArtWorkMedium\Exceptions;

use Exception;

class ArtWorkMediumCreateFailException extends Exception
{
    public function __construct()
    {
        parent::__construct('Artwork Medium create Fail.', 400);
    }

}
