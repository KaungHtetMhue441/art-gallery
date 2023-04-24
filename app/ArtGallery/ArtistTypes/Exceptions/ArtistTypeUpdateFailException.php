<?php

namespace App\ArtGallery\ArtistTypes\Exceptions;

use Exception;

class ArtistTypeUpdateFailException extends Exception
{
    public function __construct()
    {
        parent::__construct('Artist Type Update Fail.', 400);
    }

}
