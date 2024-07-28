<?php

namespace App\Http\Controllers\Auth;

use App\Dto\UserDto;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Services\LoginService;
use App\Http\Controllers\Services\UserServices;
use App\Http\Requests\FormLoginRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function cekLogin(FormLoginRequest $formLoginRequest, UserServices $loginService){
        if ( $loginService->login(UserDto::fromRequest($formLoginRequest))  ) {
            return redirect(route('dashboard.index'));
        } 
        throw ValidationException::withMessages([
            'email' => __('auth.failed')
        ]);

    }
}
