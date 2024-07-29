<?php
use Illuminate\Support\Facades\Route;

Route::post('formulir/simpan', [\App\Http\Controllers\Api\FormulirController::class,'simpan']);

