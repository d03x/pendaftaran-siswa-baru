<?php

namespace App\Http\Controllers;

use App\Dto\UserDto;
use App\Services\User\UserService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //index page
    public function index(UserService $userService)
    {
        return view('dashboard.index');
    }
}
