<?php

namespace App\ArtGallery\Users\Exceptions;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserDeleteFailException extends NotFoundHttpException
{

    /**
     * UserDeleteFailException constructor.
     */
    public function __construct()
    {
        parent::__construct('User delete Fail.');
    }
}