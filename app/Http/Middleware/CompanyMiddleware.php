<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyMiddleware
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
        $user_id = auth()->user()->id;
        $user = User::where('id', $user_id)->first();
        if (Auth::user()->role == 'company') {
            if (Auth::user()->is_verified != 1) {
                Auth::logout();

                return response()->view('userNew.singleUser.pages.company.otpVerification', get_defined_vars());
                // return redirect('/login')->with('error', 'Your account is deactivated');
            }
            if (Auth::user()->status == 0) {
                Auth::logout();
                return redirect('/login')->with('error', 'Your account is deactivated');
            }
            // elseif (Auth::user()->questionaire_submit == 1) {
            //     return $next($request);
            // }
            else {
                return $next($request);
            }
        } else {
            return redirect('/login');
        }
    }
}
