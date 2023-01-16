<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndividualMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->role == 'individual'){
            if (Auth::user()->status == 0){
                Auth::logout();
                return redirect('/login')->with('error','Your account is deactivated');
            }
            elseif (Auth::user()->questionaire_submit == 1) {
                return $next($request);
            }
            else {
                return redirect('/questinare');
            }
        } 
        else {
            return redirect('/login');
         }
    }
}
