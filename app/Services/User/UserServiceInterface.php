<?php

namespace App\Services\User;

interface UserServiceInterface
{

    public function createUser(array $user): array;

    public function listUsers();

}
