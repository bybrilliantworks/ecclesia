<?php

namespace App\Services\User;

use App\Repositories\User\UserRepositoryInterface as UserRepository;
use App\Services\User\UserServiceInterface;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UserService implements UserServiceInterface
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function createUser(array $user): array
    {
        $validator = Validator::make($user, [
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email|unique:users',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator->errors());
        }

        $password = str_random(8);
        $newUser = [
            'first_name' => $user['firstName'],
            'last_name' => $user['lastName'],
            'name' => $user['firstName'] . ' ' . $user['lastName'],
            'password' => \bcrypt($password),
            'church_id' => \auth()->user()->church_id,
            'email' => $user['email'],
        ];

        $user = $this->userRepository->create($newUser);

        return ['info' => 'Account has been created for ' . $user['email'] . 'with password: ' . $password];
    }

    public function listUsers()
    {
        return $this->userRepository->fetchAll();
    }

}
