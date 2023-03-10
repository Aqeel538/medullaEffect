<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo()
    {

        $title = 'Login';
        if (Auth::user()->role == 'admin') {
            // return redirect()->route('adminDashboard');    // admin dashboard path
            return route('adminDashboard');
        } else if (Auth::user()->role == 'individual') {
            $id = Auth::user()->id;
            return route('profile', $id);
        } else if (Auth::user()->role == 'freelancer') {
            $id = Auth::user()->id;
            return route('freelancer.profile', $id);
        } else if (Auth::user()->role == 'company') {
            return route('company.dashboard');
        } else {
            return redirect()->route('login');   // member dashboard path
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
