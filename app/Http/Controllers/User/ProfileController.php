<?php

namespace App\Http\Controllers\User;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = auth()->guard('customers')->user();

            return $next($request);
        });
    }

    public function showProfile()
    {
        $transactions = Transaction::where('customer_id', $this->user->id)->get();
        return view('user.profile.index',['user' => $this->user, 'transactions' => $transactions]);
    }

    public function info()
    {
        return view('user.profile.info',['user' => $this->user]);
    }

    public function docs()
    {
        return view('user.profile.docs',['user' => $this->user]);

    }

    public function health()
    {
        return view('user.profile.health',['user' => $this->user]);
    }


    public function banks()
    {
        return view('user.profile.bank-info',['user' => $this->user]);
    }


    public function timesheet()
    {
        return view('user.profile.time-info',['user' => $this->user]);
    }

}
