<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class SignupController extends Controller
{
    public function index()
    {
        return view('signup.index');
    }

    public function store(Request $request)
    {
        $user= new User;
        $user->name = $request->signup_name;
        $user->email = $request->signup_email;
        $user->password = Hash::make($request->signup_password);
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->save();
        auth()->login($user);
        Alert::success('Success ', 'Your account has been registered');

        return redirect()->route('dashboard.index');
    }
}
