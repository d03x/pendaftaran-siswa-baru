<?php

use App\Http\Controllers\DashboardController;
use App\Models\TahunAjaran;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//ini adalah bagian dashboard
Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('', [DashboardController::class,'index'])->name('index');
});
