<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    protected  $providers = [
        'google',
        'github',
        'facebook',
    ];
    public function callback(Request $request) {
        if (in_array($request->get('from'), $this->providers)) {
            $user = Socialite::driver($request->get('from'))->user();
            dd($user);
        }
        
    }
    public function redirect(string $provider) {
       
        if ( !in_array($provider,$this->providers) ) {
            return redirect('/google');
        }
        return Socialite::driver($provider)->redirect();
    }

}
