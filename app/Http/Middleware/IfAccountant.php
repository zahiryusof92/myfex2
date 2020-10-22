<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IfAccountant {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {
        if (Auth::check()) {
            if (Auth::user()->isAccountant()) {
                return $next($request);
            }
            
            return redirect(RouteServiceProvider::HOME);
        }

        abort(404);
    }

}
