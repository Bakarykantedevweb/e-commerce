<?php

use App\Http\Controllers\Admin\DashbordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(FrontendController::class)->group(function(){
    Route::get('/' , 'index');
    Route::get('/privacy-policy', 'terme')->name('privacy-policy');
});

// Route Register
Route::controller(RegisterController::class)->group(function () {
    Route::get('register', 'index')->name('register');
});


// Route Login
Route::controller(LoginController::class)->group(function(){
    Route::get('login','index')->name('login');
});

// Route Dashboard
Route::prefix('admin')->group(function(){
    Route::controller(DashbordController::class)->group(function () {
        
        Route::get('dashboard', 'index')->name('dashboard');
    });
});
