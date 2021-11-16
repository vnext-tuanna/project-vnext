<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleAdminMiddleware
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
        if (Auth::guard('manager')->check() && Auth::guard('manager')->user()->role == 1) {
            return $next($request);
        } else {
            return redirect()->back()->with('msg', 'You are not authorized to access');
        }
    }
}
