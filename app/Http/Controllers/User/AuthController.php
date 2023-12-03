<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

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


    //login process
    public function login(Request $request)
    {
         $this->validateForm($request);

         if($this->attempLogin($request))
         {
             return $this->sendSuccessResponse();
         }

         return $this->sendLoginFailedResponse();

    }

    protected function validateForm(Request $request)
    {
        $request->validate(
            [
                'email' => ['required', 'email', 'exists:users'],
                'password' =>  ['required'],
            ],
        );
    }

    protected function attempLogin(Request $request)
    {
        return Auth::attempt($request->only('email','password'), $request->filled('remember-me'));
    }

    protected function sendSuccessResponse()
    {
        return redirect()->route('profile');
    }

    protected function sendLoginFailedResponse()
    {
        return back()->with('wrongCredentials','ایمیل یا رمز عبور نادرست می باشد');
    }

}
