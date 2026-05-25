<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\SuitesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LocationsController::class, 'index'])->name('locations.index');

Route::get('/suites', [SuitesController::class, 'index'])
    ->middleware('checklogin');

Route::get('/register',[AuthController::class, 'showregister'])
->name('register');

Route::post('/register',[AuthController::class, 'Regist']);

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::get('/auth/google', [AuthController::class, 'redirectGoogle']);

Route::get('/auth/google/callback', [AuthController::class, 'callbackGoogle']);