<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

//  Sign In
Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::post('/login',[LoginController::class, 'loging'])->name('login');
Route::get('/logout',[LogoutController::class, 'index'])->name('index.logout');
Route::post('/loggingout',[LogoutController::class, 'loggingout'])->name('loggingout');

//  Google Sign In
Route::get('/login/google',[LoginController::class, 'redirectToGoogle'])->name('login.redirect.google');
Route::get('/login/facebook/callback',[LoginController::class, 'handleGoogleCallback']);

//  Sign Up
Route::get('/signup', [SignupController::class, 'index'])->name('signup');
Route::post('/register',[SignupController::class, 'store'])->name('register');

Route::middleware(['customAuth'])->group(
    function(){
        //  Authenticated Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

        //  Main Menu
        Route::get('/daftarkosan', [DashboardController::class, 'daftarkosan'])->name('daftarkosan.index');
        Route::get('/contactperson', [DashboardController::class, 'contactperson'])->name('contactperson.index');
        Route::get('/profil', [DashboardController::class, 'profil'])->name('profil.index');
    }
);