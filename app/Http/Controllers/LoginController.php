<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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

    //Google login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    //Google callback
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        $this->registerOrLoginGoogle($user);
    }

    public function registerOrLoginGoogle($user)
    {
        $user_exist = User::where('email', $user->email)->first();
        if ($user_exist) {
            Auth::login($user_exist);
            Alert::success('Success ', 'You are logged in');
            return redirect()->route('dashboard.index');
        } else if(!$user || $user_exist){
            // $new_user = new User();
            // $new_user->name = $user->name();
            // $new_user->email = $user->email;
            // $new_user->password = Hash::make(Str::random(8));
            // $new_user->created_at = Carbon::now();
            // $new_user->updated_at = Carbon::now();
            // $new_user->save();
            // Auth::login($new_user);
            // Alert::success('Success ', 'You are logged in');
            // return redirect()->route('dashboard.index');
            Alert::success('Success ', 'You\'re account has been registered');
            dd($user);
        }
    }

    public function register($data)
    {
        $current_timestamp = Carbon::now()->timestamp;
        $usercheck = User::where('email', '=', $data->email)->first();
        
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
