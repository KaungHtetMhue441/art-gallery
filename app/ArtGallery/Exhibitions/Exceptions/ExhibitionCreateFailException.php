<?php

namespace App\ArtGallery\Exhibitions\Exceptions;

use Exception;

class ExhibitionCreateFailException extends Exception
{
    public function __construct()
    {
        parent::__construct('Exhibition create Fail.');
    }

}
