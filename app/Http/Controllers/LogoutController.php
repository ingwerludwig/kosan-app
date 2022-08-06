<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;


class LogoutController extends Controller
{
    public function index()
    {
        return view('landing.logout');
    }

    public function loggingout()
    {
        Auth::logout();
        return redirect()->route('landing');
    }
}
