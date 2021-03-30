<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class Checkauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    /*public function handle(Request $request, Closure $next)
    {
        
    }*/
	
	public function handle($request, Closure $next, $guard = null) {
		if(Auth::user()->isAdmin != 1){ 
			return redirect()->guest('auth/login');
		}
			return $next($request);
	}
}
