<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\LoginUser;
use App\Http\Middleware\RegisterUser;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;




///////////////////////////////// AUTH //

Route::get('/login', [UserController::class, 'getLogin'])
    ->name('login')->middleware(LoginUser::class);
Route::post('login', [UserController::class, 'login'])->name('loginMatch');


Route::get('register', [UserController::class, 'getRegister'])
    ->name('get.Register')->middleware(RegisterUser::class);
Route::post('register', [UserController::class, 'register'])->name('saveRegister');


Route::get('dashboard', [UserController::class, 'dashboardPage'])
    ->name('dashboard')->middleware(ValidUser::class);

Route::get('logout', [UserController::class, 'logout'])->name('logout');
