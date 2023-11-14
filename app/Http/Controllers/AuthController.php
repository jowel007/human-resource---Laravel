<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function forgot_password()
    {
//        echo "forgot";
//        die();
        return view('forgot_password');
    }

    public function register(){
//        echo "register";
//        die();
        return view('register');
    }
}
