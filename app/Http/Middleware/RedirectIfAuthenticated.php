<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->nivel_acesso == 0){
                return redirect()->route('home');
            }elseif (Auth::user()->nivel_acesso == 1){
                return redirect()->route('home');
            }elseif (Auth::user()->nivel_acesso == 2){
                return redirect()->route('agendamentos');
            }else{
                return redirect()->route('prontuarios');
            }
        }
        return $next($request);
    }
}
