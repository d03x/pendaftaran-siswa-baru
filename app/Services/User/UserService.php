<?php
namespace App\Services\User;

use App\Core\BaseService;
use App\Dto\UserDto;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

class UserService extends BaseService{
    public UserRepository $userRepository;
    public function __construct(
        User $user,
        UserRepository $userRepository){
        $this->model = $user;
        $this->userRepository = $userRepository;
    }

    public function register(UserDto $userDto)
    {

    }
    public function login(UserDto $userDto){

        if ( $user =  $this->userRepository->emailUnique($userDto->email)  ){
            if ( $userDto->password ) {
                return Auth::attempt([
                    'email' => $userDto->email,
                    'password' => $user->password,
                ], $userDto->remember_me);
            }
            return Auth::loginUsingId($user->id);
        }
    }
}
