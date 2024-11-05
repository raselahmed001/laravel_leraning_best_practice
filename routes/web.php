<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
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


Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/', function () {
    return view('auth.login');
});

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');




Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('category', CategoryController::class);
