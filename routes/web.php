<?php

use App\Http\Controllers\Admin\DashbordController;
use App\Http\Controllers\Admin\CouleurController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AdminMiddleware\isAdmin;

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
Auth::routes();
Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/privacy-policy', 'terme')->name('privacy-policy');
});

// Route Register
Route::controller(RegisterController::class)->group(function () {
    Route::get('register', 'index')->name('register');
});


// Route Login
Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
});

// Route Dashboard
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(DashbordController::class)->group(function () {

        Route::get('dashboard', 'index')->name('dashboard');

        // Brands Livewire
        Route::get('/couleurs', [CouleurController::class, 'index'])->name('couleur');
    });
});
/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
