<?php

use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::prefix('login')->middleware('guest')->name('auth.')->group(function () {
    Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
    Route::post('/', [App\Http\Controllers\Auth\LoginController::class, 'cekLogin'])->name('login.cek');
    Route::get('social/callback', [SocialLoginController::class, 'callback']);
    Route::get('social/{provider}', [SocialLoginController::class, 'redirect'])->name('social');
});
Route::get('logout',fn()=>Auth::logout());
//ini adalah bagian dashboard
Route::prefix('dashboard')->middleware(['role'])->name('dashboard.')->group(function () {
    Route::get('', [DashboardController::class, 'index'])->name('index');
    Route::middleware('role:siswa')->group(function(){
        Route::get('biodata',[\App\Http\Controllers\BiodataSiswaController::class,'index'])->name('biodata-siswa') ;
        Route::get('biodata/review',[\App\Http\Controllers\BiodataSiswaController::class,'index'])->name('biodata-siswa-review') ;
    });
});
