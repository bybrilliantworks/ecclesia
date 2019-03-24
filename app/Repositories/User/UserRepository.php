<?php

namespace App\Repositories\User;

use App\Repositories\User\UserRepositoryInterface;
use App\User;

class UserRepository implements UserRepositoryInterface
{

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function create(array $user): User
    {
        return $this->user->create($user);
    }

    public function fetchAll()
    {
        return $this->user->all();
    }

}
