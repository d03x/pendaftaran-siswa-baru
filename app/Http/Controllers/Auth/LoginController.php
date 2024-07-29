<?php

namespace App\Http\Controllers\Auth;

use App\Dto\UserDto;
use App\Http\Controllers\Controller;

use App\Http\Requests\FormLoginRequest;
use App\Services\User\UserService;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function cekLogin(FormLoginRequest $formLoginRequest, UserService $loginService){
        if ( $loginService->login(UserDto::fromRequest($formLoginRequest))  ) {
            return redirect(route('dashboard.index'));
        }
        throw ValidationException::withMessages([
            'email' => __('auth.failed')
        ]);

    }
}
