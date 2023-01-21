<?php

namespace App\ArtGallery\Users\Repositories\Interfaces;

use App\ArtGallery\Base\BaseRepositoryInterface;
use App\ArtGallery\Users\User;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    public function getUserById(int $id) : User;

    public function createUser(array $params) : User;

    public function updateUserById(int $id, array $params) : User;

    public function deleteUserById(int $id) : bool;
}