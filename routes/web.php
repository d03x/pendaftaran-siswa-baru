<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group([
    'prefix' => 'dashboard'
],function(){
    Route::view('','dashboard.index');
});
