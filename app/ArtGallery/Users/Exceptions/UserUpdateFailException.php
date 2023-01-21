<?php

namespace App\ArtGallery\Users\Exceptions;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserUpdateFailException extends NotFoundHttpException
{

    /**
     * UserUpdateFailException constructor.
     */
    public function __construct()
    {
        parent::__construct('User update Fail.');
    }
}