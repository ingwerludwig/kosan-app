<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UserMenuController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function daftarkosan()
    {
        return view('user.daftarkosan');
    }

    public function contactperson()
    {
        return view('user.contactperson');
    }

    public function profil()
    {
        return view('user.profil');
    }

}
