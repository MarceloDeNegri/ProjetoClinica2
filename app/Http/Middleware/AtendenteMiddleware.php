<?php

namespace App\Http\Middleware;

use Closure;

class AtendenteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null) {
        if (Auth::guard($guard)->check() && Auth::user()->nivel_acesso == 1) {
            return $next($request);
        }else{
            return view('vendor/adminlte/auth/login');
        }
    }
}
