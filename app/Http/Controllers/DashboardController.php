<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
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
