<?php

namespace App\ArtGallery\Users\Repositories;

use App\ArtGallery\Users\Exceptions\UserCreateFailException;
use App\ArtGallery\Users\Exceptions\UserDeleteFailException;
use App\ArtGallery\Users\Exceptions\UserNotFoundException;
use App\ArtGallery\Users\Exceptions\UserUpdateFailException;
use App\ArtGallery\Users\Repositories\Interfaces\UserRepositoryInterface;
use App\ArtGallery\Users\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserRepository implements UserRepositoryInterface
{
    public function __construct(private User $model)
    {
        $this->model = $model;
    }

    /**
     * Get user by Id
     * 
     * @param int $id
     * 
     * @return User 
     */
    public function getUserById($id): User
    {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $e) {
            throw new UserNotFoundException;
        }
    }

    /**
     * Create user
     * 
     * @param array $params
     * 
     * @return User
     */
    public function createUser(array $params): User
    {
        $user = $this->model->create($params);

        throw_if(!$user, UserCreateFailException::class);

        return $user;
    }

    /**
     * Update user
     * 
     * @param int $id
     * @param array $params
     * 
     * @return User
     */
    public function updateUserById(int $id, array $params): bool
    {
        $user = $this->getUserById($id);

        throw_if(!$user->update($params), UserUpdateFailException::class);

        return $user->fresh();
    }

    /**
     * Delete user
     * 
     * @param int $id
     * 
     * @return bool
     */
    public function deleteUserById($id): bool
    {
        $user = $this->getUserById($id);

        throw_if(!$user->delete(), UserDeleteFailException::class);

        return true;    
    }
}