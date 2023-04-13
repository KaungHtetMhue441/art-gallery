<?php

namespace App\ArtGallery\ArtistTypes\Exceptions;

use Exception;

class ArtistTypeDeleteFailException extends Exception
{
    public function __construct()
    {
        parent::__construct('Artist Type Delete Fail.', 400);
    }

}
