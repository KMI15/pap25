<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function LoginForm()
    {
        return view('login');
    }

    public function RegisterForm()
    {
        return view('register');
    }
}
