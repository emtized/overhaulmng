<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function send(Request $request)
    {
        dd($request->all());
    }

    public function verify(Request $request)
    {
        //
    }
}
