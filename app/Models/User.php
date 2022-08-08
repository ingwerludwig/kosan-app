<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function insertData($user)
    {
        $result = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'password' => Hash::make(Str::random(8)),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'google_id' => $user->id
        ]);
        return $result;
    }
}
