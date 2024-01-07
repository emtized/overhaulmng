<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Payment\PaymentService;

class PaymentController extends Controller
{
    public function send(Request $request)
    {
        if($gateway_name = '1'){
        $zarinpalGatWay = new PaymentService();
        $zarinpalGatewayResult = $zarinpalGatWay->send($request->amount, 'خرید پلن ',);
        dd($zarinpalGatewayResult);
        }
    }

    public function verify(Request $request)
    {
        //
    }
}
