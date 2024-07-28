<?php

namespace App\Http\Controllers\Auth;

use App\Dto\UserDto;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Services\LoginService;
use App\Http\Controllers\Services\UserServices;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    /**
     * socialite allowed provider
     * @var array
     */
    protected $providers = [
        'google',
        'github',
        'facebook',
    ];
    /**
     * callback from oauth provider
     * @param \Illuminate\Http\Request $request
     * @param \App\Http\Controllers\Services\LoginService $loginService
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function callback(Request $request, UserServices $loginService): RedirectResponse|Redirector
    {
        //cek callback nya dari mana
        if (in_array($request->get('from'), $this->providers)) {
            //ambil data user yang di kirim dari oauth server
            $user = Socialite::driver($request->get('from'))->user();
            $userDto = new UserDto(
                foto: $user->avatar,
                token: $user->token,
                name: $user->name,
                remember_me: $request->boolean('remember_me'),
                email: $user->email,
                password: uniqid(),
            );
            //cek apakah user nya sudah terdaftar apa belum
            $cekUser = User::where('email', $user->email)->first();
            if ($cekUser && Auth::loginUsingId($cekUser->id,$userDto->remember_me )) {
                return redirect(route('dashboard.index'));
            }
            //jika belum langsung register
            $loginService->register($userDto);
            $loginService->login($userDto);
            return redirect(route('dashboard.index'));
        }
    }
    public function redirect(string $provider)
    {

        if (!in_array($provider, $this->providers)) {
            return redirect('/google');
        }
        return Socialite::driver($provider)->redirect();
    }

}
