<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
    // Route::resource('register', AuthController::class);

    Route::get('users', 'userProfile')->middleware('auth:sanctum');
    Route::get('loggout', 'userLogout')->middleware('auth:sanctum');
});

