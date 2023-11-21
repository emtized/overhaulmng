<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('layouts.auth');
    }


    public function showRegister()
    {
        return view('user.register.first');
    }

    public function showforgetPass()
    {
        return view('auth.forget-pass');

    }
}
