<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $get_user = User::where('email', auth()->user()->email)->first();
        // if($get_user->status == 1){
        // }
        // else{
        //     return redirect('/verify-account');
        // }
        return view('home');
    }
}
