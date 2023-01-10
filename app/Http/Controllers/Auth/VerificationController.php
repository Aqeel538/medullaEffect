<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use App\Models\VerifyToken;
use App\Models\User;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    public function userEmailActivation(Request $req){
        $verifyToken = $req->token;
        $verifyToken = VerifyToken::where('token', $verifyToken)->first();
        if($verifyToken){
            $verifyToken->is_activated = 1;
            $verifyToken->save();
            $user = User::where('email', $verifyToken->email)->first();
            $user->status = 1;
            $user->save();

            $getting_token = VerifyToken::where('token', $verifyToken->token)->first();
            $getting_token->delete();

            return redirect('/questinare', compact('user'))->with('is_activated', 'Your account is now activated');
        }
        else{
            return redirect('/veri-account');
        }
    }

    public function verifyAccount(){
        return view('verifications.otp_verification');
    }
}
