<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{


    public function index()
    {
        $customers = Customer::latest()->limit(8)->get();
        return view('admin.dashboard',compact('customers'));
    }


    //login to admin process
    public function showLogin()
    {
        return view('admin.auth.login');
    }

    public function handleLogin(Request $request)
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
        return redirect()->route('admin');
    }

    protected function sendLoginFailedResponse()
    {
        return back()->with('wrongCredentials','ایمیل یا رمز عبور نادرست می باشد');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.show.login');
    }

}
