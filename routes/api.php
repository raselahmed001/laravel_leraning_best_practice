<?php

use App\Http\Controllers\Api\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;



// Route::get('/clear', function () {
//     Artisan::call('storage:link');
//     Artisan::call('optimize:clear');

//     echo "Storage Link & Cache Clear";
//     return redirect()->back();

// });

// Route::fallback(function () {
//     return response()->view('404');
// });

Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register')->name('register');;
    Route::post('/login', 'login')->name('login');;
    // Route::resource('register', AuthController::class);

    Route::get('users', 'userProfile')->middleware('auth:sanctum');
    Route::get('loggout', 'userLogout')->middleware('auth:sanctum');
});

