<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KostController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\User\UserMenuController;
use App\Http\Controllers\Admin\AdminMenuController;
use App\Http\Controllers\Auth\GoogleOAuth\GoogleController;

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
Route::get('/login/google',[GoogleController::class, 'redirectToGoogle'])->name('login.redirect.google');
Route::get('/login/callback',[GoogleController::class, 'handleGoogleCallback']);

//  Sign Up
Route::get('/signup', [SignupController::class, 'index'])->name('signup');
Route::post('/register',[SignupController::class, 'store'])->name('register');

Route::middleware(['customAuth'])->group(
    function(){
        Route::get('/dashboard', [UserMenuController::class, 'index'])->name('dashboard.index');
        Route::get('/daftarkosan', [UserMenuController::class, 'daftarkosan'])->name('daftarkosan.index');
        Route::get('/contactperson', [UserMenuController::class, 'contactperson'])->name('contactperson.index');
        Route::get('/profil', [UserMenuController::class, 'profil'])->name('profil.index');
        Route::post('/search_kost', [UserMenuController::class, 'listkost'])->name('find.kost');
    }
);


Route::middleware(['verifyAdmin'])->group(
    function(){
        Route::get('/admin/dashboard', [AdminMenuController::class, 'index'])->name('admin.dashboard');
        Route::get('/admin/daftarkosan', [AdminMenuController::class, 'adminDaftarKosan'])->name('admin.daftarkosan.index');
        Route::get('/admin/listkontak', [AdminMenuController::class, 'adminListKontak'])->name('admin.listkontak.index');
        Route::get('/admin/listpembayaran', [AdminMenuController::class, 'adminListPembayaran'])->name('admin.listpembayaran.index');
    }
);