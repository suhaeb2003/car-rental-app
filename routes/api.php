<?php

use App\Http\Controllers\CarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/user-signup', [UserController::class, 'userSignup'])->name('user-signup');
Route::post('/user-login', [UserController::class, 'userLogin'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::post('/addcar', [CarController::class, 'addcar'])->name('addcar');
Route::get('/allcars', [CarController::class, 'getAllCars'])->name('allcars');
Route::post('/update-car/{id}', [CarController::class, 'updatecar'])->name('updatecar');
Route::get('/deletecar/{id}', [CarController::class, 'deletecar'])->name('deletecar');

