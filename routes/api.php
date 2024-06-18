<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UpdateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api')->name('logout');
    Route::post('/refresh', [AuthController::class, 'refresh'])->middleware('auth:api')->name('refresh');
    Route::post('/me', [AuthController::class, 'me'])->middleware('auth:api')->name('me');
});

Route::group([], function () {
    Route::get('/posts', PostController::class)->middleware('auth:api');
    Route::get('/posts/create', CreateController::class)->middleware('auth:api');
    Route::post('/posts', StoreController::class)->middleware('auth:api');
    Route::get('/posts/{post}', ShowController::class)->middleware('auth:api');
    Route::get('//posts/{post}/edit', EditController::class)->middleware('auth:api');
    Route::patch('posts/{post}', UpdateController::class)->middleware('auth:api');
    Route::delete('/posts/{post}', DeleteController::class)->middleware('auth:api');
});
