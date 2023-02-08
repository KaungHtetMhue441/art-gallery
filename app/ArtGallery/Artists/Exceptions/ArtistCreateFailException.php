<?php

namespace App\ArtGallery\Artists\Exceptions;

use Exception;

class ArtistCreateFailException extends Exception
{
    public function __construct()
    {
        parent::__construct('Artist create Fail.');
    }

}
