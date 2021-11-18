<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleManagerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('manager')->check() && Auth::guard('manager')->user()->role == 2) {
            return $next($request);
        } else {
            return redirect()->back()->with('msg', 'You are not authorized to access');
        }
    }
}
