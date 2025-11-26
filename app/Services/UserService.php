<?php

namespace App\Services;

use App\Interfaces\Reposities\UserReposityInterface;
use App\Interfaces\Services\UserServiceInterface;
use App\Models\User;

class UserService implements UserServiceInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected UserReposityInterface $userReposity)
    {
        //
    }
    public function createUser($userDTO)
    {
       $data = [
        'name' => $userDTO->name,
        'email' => $userDTO->email,
        'password' => bcrypt($userDTO->password),
       ];
         return $this->userReposity->create($data);
    }
}
