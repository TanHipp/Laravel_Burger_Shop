<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EnsureAuthenticated
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            return $next($request);
        }

        return redirect()->route('account.login')->with('error', 'Vui lòng đăng nhập để tiếp tục mua hàng.');
    }
}
