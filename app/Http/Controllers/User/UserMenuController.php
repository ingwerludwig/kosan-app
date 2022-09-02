<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\KostController;

class UserMenuController extends Controller
{
    public function index()
    {
        $KostController = new KostController();
        $data = $KostController->findAll();
        return view('dashboard.index', ['datas' => $data]);
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

    public function listkost(Request $request)
    {
        $KostController = new KostController();
        $data = $KostController->findKost($request->alamat);
        return view('dashboard.index', ['datas' => $data]);
    }
}