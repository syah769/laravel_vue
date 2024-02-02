<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
require __DIR__.'/api/v1.php';
require __DIR__.'/api/v2.php';

Route::prefix('auth')->group(function () {
    Route::post('/login', \App\Http\Controllers\Api\Auth\LoginController::class);
    Route::post('/logout', \App\Http\Controllers\Api\Auth\LogoutController::class)->middleware('auth:sanctum');
    Route::post('/register', \App\Http\Controllers\Api\Auth\RegisterController::class);
});
