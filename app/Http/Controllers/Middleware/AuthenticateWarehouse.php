<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateWarehouse
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('warehouse')->check()) {
            return redirect('/login');
        }

        return $next($request);
    }
}
