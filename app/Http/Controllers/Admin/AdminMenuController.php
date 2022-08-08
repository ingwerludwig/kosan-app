<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminMenuController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function adminDaftarKosan()
    {
        return view('admin.admindaftarkosan');
    }

    public function adminListKontak()
    {
        return view('admin.adminlistkontak');
    }

    public function adminListPembayaran()
    {
        return view('admin.adminpembayaran');
    }
}