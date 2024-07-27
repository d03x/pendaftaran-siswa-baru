<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//ini adalah bagian dashboard
Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('', [DashboardController::class,'index'])->name('index');
    Route::get('/profile', [DashboardController::class,'index'])->name('index');
    Route::get('/profile/google', [DashboardController::class,'index'])->name('index');
});
