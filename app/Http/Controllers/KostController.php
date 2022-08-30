<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KostController extends Controller
{
    public function findKost(String $query_alamat)
    {
        $data = DB::select(
            DB::raw(" SELECT * FROM kost_iklan WHERE alamat LIKE '%$query_alamat%' ")
        );
        return $data;
    }

    public function findAll()
    {
        $data = DB::select(DB::raw("SELECT * FROM kost_iklan"));
        return $data;
    }
}
