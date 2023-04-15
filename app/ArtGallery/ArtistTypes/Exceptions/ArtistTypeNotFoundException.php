<?php

namespace App\ArtGallery\ArtistTypes\Exceptions;

use Exception;

class ArtistTypeNotFoundException extends Exception
{
    public function __construct()
    {
        parent::__construct('Artist Types create Fail.', 404);
    }

}
