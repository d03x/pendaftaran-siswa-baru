<?php

namespace App\Http\Controllers\Services;

use App\Dto\UserDto;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserServices extends Controller
{
    public function login(UserDto $userDto)
    {
        if (
            Auth::attempt([
                'email' => $userDto->email,
                'password' => $userDto->password,
            ], $userDto->remember_me)
        ) {
            return Auth::user();
        }
        return false;
    }

    public function register(UserDto $userDto)
    {
        $user = User::create([
            'email' => $userDto->email,
            'password' => $userDto->password,
            'name' => $userDto->name,
            'foto' => $userDto->foto,
        ]);
        return $user;
    }
}
