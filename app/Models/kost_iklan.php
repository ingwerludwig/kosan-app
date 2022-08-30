<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kost_iklan extends Model
{
    use HasFactory;
    public function insertData($data)
    {
        $result = kost_iklan::create([
            'alamat' => $data->alamat,
            'listrik' => $data->besar_listrik,
            'fasilitas' => $data->fasilitas,
            'keuntungan' => $data->keuntungan,
            'catatan' => $data->catatan,
            'harga' => $data->harga,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return $result;
    }
}
