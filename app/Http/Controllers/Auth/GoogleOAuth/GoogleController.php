<?php

namespace App\Http\Controllers\Auth\GoogleOAuth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\LoginController;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class GoogleController extends Controller
{
    //Google login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    //Google callback
    public function handleGoogleCallback(LoginController $loginController, User $user)
    {
        $Googleuser = Socialite::driver('google')->user();
        $loginController->registerOrLoginGoogle($Googleuser, $user);
        return redirect()->route('dashboard.index');
    }
}