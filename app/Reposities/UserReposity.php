<?php

namespace App\Reposities;

use App\Models\User;
use App\Interfaces\Reposities\UserReposityInterface;

class UserReposity implements UserReposityInterface
{
    public function create($data)
    {
        return User::create($data);
    }
}
