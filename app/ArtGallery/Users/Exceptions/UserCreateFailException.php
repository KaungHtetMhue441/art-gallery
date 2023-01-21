<?php

namespace App\ArtGallery\Users\Exceptions;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserCreateFailException extends NotFoundHttpException
{

    /**
     * UserCreateFailException constructor.
     */
    public function __construct()
    {
        parent::__construct('User create Fail.');
    }
}