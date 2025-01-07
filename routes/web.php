<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\profileController;

Route::get('/gg', function () {
    return view('welcome');
});


Route::get('/hi',[testController::class ,'show']);

Route::get('/profile',[profileController::class, 'user_profile']);