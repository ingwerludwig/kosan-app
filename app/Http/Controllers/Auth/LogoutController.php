<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class LogoutController extends Controller
{
    public function index()
    {
        return view('landing.logout');
    }

    public function loggingout()
    {
        Auth::logout(Auth::user());
        session()->flush();
        session()->regenerate();   
        return redirect()->route('landing');
    }
}
