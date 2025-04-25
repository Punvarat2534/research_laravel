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

    public function redirectToGoogle(){
        return Socialite::driver('google')->stateless()->redirect();
        }
        
        //Google callback  
        public function handleGoogleCallback(){
        
        $user = Socialite::driver('google')->stateless()->user();
        
          $this->_registerorLoginUser($user);
          return redirect()->route('home');
        }

}
