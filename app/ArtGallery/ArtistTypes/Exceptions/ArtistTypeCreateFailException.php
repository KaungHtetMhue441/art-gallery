<?php

namespace App\ArtGallery\ArtistTypes\Exceptions;

use Exception;

class ArtistTypeCreateFailException extends Exception
{
    public function __construct()
    {
        parent::__construct('Artist Type create Fail.', 400);
    }

}
