<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;


class AuthController extends Controller
{
    
    public function login()
    {

        $data = [];     
        return view('auth.login', $data);
    }


    public function register()
    {

        $data = [];     
        return view('auth.register', $data);
    }

    public function admin()
    {

        $data = [];     
        return view('backend.admin', $data);
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        $user = User::where('email', $googleUser->email)->first();
        if(!$user)
        {
            echo $googleUser->name;
            //$user = User::create(['name' => $googleUser->name, 'email' => $googleUser->email, 'password' => \Hash::make(rand(100000,999999))]);
        }

        //Auth::login($user);

        //return redirect(RouteServiceProvider::HOME);
    }


}
