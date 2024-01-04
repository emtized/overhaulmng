<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Payment\PaymentService;

class PaymentController extends Controller
{
    public function send(Request $request)
    {
        $zarinpalGatWay = new PaymentService();
        $zarinpalGatewayResult = $zarinpalGatWay->send($request->amount, 'خرید پلن ',);
    }

    public function verify(Request $request)
    {
        //
    }
}
