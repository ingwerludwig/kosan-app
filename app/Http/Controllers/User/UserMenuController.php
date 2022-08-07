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
        return view('main.daftarkosan');
    }

    public function contactperson()
    {
        return view('main.contactperson');
    }

    public function profil()
    {
        return view('main.profil');
    }

}
