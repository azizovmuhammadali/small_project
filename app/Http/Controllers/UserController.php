<?php

namespace App\Http\Controllers;

use App\DTO\UserDTO;
use App\Http\Requests\UserStoreRequest;
use App\Http\Resources\UserResource;
use App\Interfaces\Services\UserServiceInterface;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use ResponseTrait;
    public function __construct(protected UserServiceInterface $userservice)
    {}
    public function register(UserStoreRequest $request)
    {
      $userDTO = new UserDTO($request->name, $request->email, $request->password);
      $user = $this->userservice->createUser($userDTO);
      return $this->success(new UserResource($user));
    }
}
