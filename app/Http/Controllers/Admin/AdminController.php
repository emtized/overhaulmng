<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{

    public function index()
    {
        dd('you are in admin-panel');
    }


    //login to admin process
    public function showLogin()
    {
        return view('admin.auth.login');
    }

    public function handleLogin(Request $request)
    {
        $this->validateForm($request);

         $credentials = $request->only('email', 'password',$request->filled('remember-me'));

         if (Auth::guard('admin')->attempt($credentials)) {
             return redirect()->intended('/admin');
         }
         return redirect()->route('admin.show.login')->withErrors(['email' => 'اطلاعات وارد شده معتبر نیستند']);
    }

    protected function validateForm(Request $request)
    {
        $request->validate(
            [
                'email' => ['required', 'email', 'exists:admin_users'],
                'password' =>  ['required'],
            ],
        );
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.show.login');
    }


}
