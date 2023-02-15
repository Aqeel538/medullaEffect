<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\EmailVerificationMail;
use App\Models\User;

use App\Models\VerifyToken;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Mail;
// use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;


class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;
    // FORGOT PASSWORD
    public function forgot_password()
    {
        return view('auth.forgotPassword.forgotPassword');
        // return view('auth.forgotPassword.otpVerification');
    }

    public function otp_verification()
    {
        return view('auth.forgotPassword.otpVerification');
    }

    public function reset_password(Request $data)
    {


        requestValidate($request, [
            "email" => "required|email|exists:users"

        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            $token = rand(0, 9999);
            VerifyToken::insert([
                'email' => $user->email,
                'token' => $token
            ]);
            Mail::send('mails.forgot-password', ['user' => $user, 'token' => $token], function ($m) use ($user, $token) {
                $m->from('forgot@app.com', 'My CRM');

                $m->to($user->email, $user->name)->subject('Forgot Password Token');
            });


            return ['status' => true, 'message' => 'OTP has been sent on your Email please check your inbox, also check spam list'];
        } else {

            return ['status' => false, 'message' => "The Email you provided doesn't belong to any account"];
        }

        return ['status' => true, 'message' => 'OTP has been sent on your Email please check your inbox, also check spam list'];
    }

    // public function reset_password_old(Request $data)
    // {


    //     $validToken = rand(10, 100. . '2023');
    //     $get_token = new VerifyToken();
    //     $get_token->token = $validToken;
    //     $get_token->email = $data['email'];
    //     $get_token->save();

    //     $get_user_email = $data['email'];
    //     // $get_user_name = $data['name'];

    //     Mail::send('emails.verification', ['user' => $data, 'token' => $validToken], function ($m) use ($data, $validToken) {

    //         $m->from('info@dwive758.com', 'medullaEffect');

    //         $m->to($data->email, $data->name)->subject('Forgot Password Token');
    //     });
    //     // Mail::to($data['email'])->send(new EmailVerificationMail($get_user_email, $validToken));
    // }
}
