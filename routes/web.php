<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.home');
});
Route::get('/all-cars',[CarController::class, 'allcars'])->name('allcars');


/*
/*user routes*/
Route::post('/user-signup', [UserController::class, 'userSignup'])->name('user-signup');