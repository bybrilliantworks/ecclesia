<?php

namespace App\Http\Controllers;

use App\Services\User\UserService;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        try {
            $response = $this->userService->createUser($request->all());
            return \back()->with('info', $response['info']);
        } catch (ValidationException $ex) {
            return back()->withErrors($ex->getMessage())->withInput();
        }
    }

    public function index()
    {
        $users = $this->userService->listUsers();

        return view('users.index')->with(['users' => $users]);
    }
}
