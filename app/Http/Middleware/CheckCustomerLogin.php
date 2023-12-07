<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckCustomerLogin
{

    public function handle($request, Closure $next)
    {
        if (!Auth::guard('customers')->check()) {
            return redirect('/login');
        }

        return $next($request);
    }
}
