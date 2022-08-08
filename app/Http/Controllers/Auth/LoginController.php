<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function registerOrLoginGoogle($Googleuser, User $user)
    {
        $user_exist = User::where('email', $Googleuser->email)->first();
        if ($user_exist)
        {
            auth()->login($user_exist);
            Alert::success('Success ', 'You are logged in');
            return redirect()->route('dashboard.index');
        } 
        else
        {
            $userCreated = $user->insertData($Googleuser);
            auth()->login($userCreated, true);
        }
    }


    public function loging(Request $request)
    {
        $user = User::where('email', '=', $request->landing_email)->first();
        if($user){
            if(Hash::check($request->landing_password, $user->password)){
                auth()->login($user);
                Alert::success('Success ', 'You are logged in');
                return redirect()->route('dashboard.index');
            }else{
                Alert::error('Error ', 'Wrong password');
                return redirect()->route('signup.index');
            }
        }else{
            Alert::error('Error ', 'Wrong email');
            return redirect()->route('signup.index');
        }
    }
}
