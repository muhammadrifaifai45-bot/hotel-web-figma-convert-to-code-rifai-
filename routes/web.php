<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LocationsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LocationsController::class, 'index']);

Route::get('/suites', function () {
    return view('suites');
});

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::get('/auth/google', [AuthController::class, 'redirectGoogle']);

Route::get('/auth/google/callback', [AuthController::class, 'callbackGoogle']);