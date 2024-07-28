<?php

use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('welcome');
})->name('login');
Route::prefix('login')->name('auth.')->group(function(){
    Route::get('social/callback',[SocialLoginController::class,'callback']);
    Route::get('social/{provider}',[SocialLoginController::class,'redirect'])->name('social');
});
//ini adalah bagian dashboard
Route::prefix('dashboard')->middleware(['role'])->name('dashboard.')->group(function () {
    Route::get('', [DashboardController::class,'index'])->name('index');
});
