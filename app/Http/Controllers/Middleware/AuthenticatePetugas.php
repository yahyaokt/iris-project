<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticatePetugas
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('petugas')->check()) {
            return redirect('/login');
        }

        return $next($request);
    }
}
