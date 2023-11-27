<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile()
    {
        return view('user.profile.index');
    }

    public function info()
    {
        return view('user.profile.info');
    }

    public function docs()
    {
        return view('user.profile.docs');

    }

    public function health()
    {
        return view('user.profile.health');
    }


    public function banks()
    {
        return view('user.profile.bank-info');

    }


    public function timesheet()
    {
        return view('user.profile.time-info');
    }

}
