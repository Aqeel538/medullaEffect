<?php

namespace App\Http\Controllers\company\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\VerifyToken;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CompanyRegistrationController extends Controller
{
    // public function create(Request $data)
    // {
    //     Session::put('registerData', $data);
    //     $validate = $this->validate($data, [
    //         'first_name' => 'required|string|max:255',
    //         'last_name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:8',
    //     ]);
    //     if ($validate) {
    //         $user =  User::create([
    //             'name' => $data['first_name'] . ' ' . $data['last_name'],
    //             'email' => $data['email'],
    //             'password' => Hash::make($data['password']),
    //             'address' => $data['address'],
    //             'company_name' => $data['company_name'],
    //             'website' => $data['website'],
    //             'phone' => $data['phone'],
    //             'industry' => $data['industry'],
    //             'contact' => $data['contact'],
    //             'role' => 'company',
    //             'status' => 1,
    //         ]);
    //     } else {

    //         echo 'Errors';
    //         return view('userNew.singleUser.pages.company.companay ', get_defined_vars());
    //     }

    //     VerifyToken::where('email', $data->email)->delete();
    //     $user = User::where('email', $data->email)->first();
    //     Session::put('userMail', $user);
    //     if ($user) {
    //         $token = rand(111111, 999999);
    //         VerifyToken::insert([
    //             'email' => $user->email,
    //             'token' => $token
    //         ]);
    //         Mail::send('emails.verification', ['user' => $user, 'token' => $token], function ($m) use ($user, $token) {
    //             $m->from('info@dwive758.com', 'medullaEffect');

    //             $m->to($user->email, $user->name)->subject('Verify email');
    //         });

    //         // return ['status' => true, 'message' => 'OTP has been sent on your Email please check your inbox, also check spam list'];

    //         // return view('userNew.singleUser.pages.company.otpVerification', get_defined_vars());
    //         return redirect('/otp-verification-page');
    //     } else {

    //         return ['status' => false, 'message' => "The Email you provided doesn't belong to any account"];
    //     }
    //     // $validToken = rand(10, 100..'2023');
    //     // $get_token = new VerifyToken();
    //     // $get_token->token = $validToken;
    //     // $get_token->email = $data['email'];
    //     // $get_token->save();

    //     // $get_user_email = $data['email'];
    //     // $get_user_name = $data['name'];

    //     // \Mail::to($data['email'])->send(new EmailVerificationMail($get_user_email, $get_user_name, $validToken));

    //     $user_id = $user->id;
    //     // return redirect('/login');
    //     // return view('userNew.singleUser.pages.company.otpVerification', get_defined_vars());
    //     return redirect('/otp-verification-page');
    // }

    public function create(Request $data)
    {
        // dd($data);
        $validator = Validator::make($data->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        if (!$validator->passes()) {

            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            $user =  User::create([
                'name' => $data['first_name'] . ' ' . $data['last_name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'address' => $data['address'],
                'city' => $data['city'],
                'state' => $data['state'],
                'zip_code' => $data['zip_code'],
                'company_name' => $data['company_name'],
                'website' => $data['website'],
                'phone' => '+' . $data->dial_code . $data['phone'],
                'industry' => $data['industry'],
                'contact' => $data['contact'],
                'role' => 'company',
                'status' => 1,
            ]);

            VerifyToken::where('email', $data->email)->delete();
            $user = User::where('email', $data->email)->first();
            Session::put('userMail', $user);
            if ($user) {
                $token = rand(111111, 999999);
                VerifyToken::insert([
                    'email' => $user->email,
                    'token' => $token
                ]);
                Mail::send('emails.verification', ['user' => $user, 'token' => $token], function ($m) use ($user, $token) {
                    $m->from('info@dwive758.com', 'medullaEffect');

                    $m->to($user->email, $user->name)->subject('Verify email');
                });
                if ($user) {
                    return response()->json(['status' => 1, 'message' => "User Has Been Successfully Register"]);
                }
                // return response()->json(['status' => 0, 'message' => "User Not Register"]);
            }
        }
    }









    function company_otp_verification(Request $request)
    {

        $validator = Validator::make($request->all(), [
            "o" => "required",
            "t" => "required",
            "p" => "required",
            "v" => "required",
            "e" => "required",
            "r" => "required",
        ]);

        if (!$validator->passes()) {

            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            $requestToken = $request->o . $request->t . $request->p . $request->v . $request->e . $request->r;
            $token = VerifyToken::where('token', $requestToken)->first();
            // dd($token);
            if (isset($token) && !empty($token)) {
                User::where('email', $token->email)->update([
                    'is_verified' => 1
                ]);

                $user = User::where('email', $token->email)->first();
                VerifyToken::where('token', $request->token)->delete();

                // return ['code' => 200, 'status' => true, 'message' => 'Registered Successfully', 'data' => $user, 'access_token' => $user->createToken($request->email)->plainTextToken];
                // return view('auth.login', get_defined_vars());
            } else {

                return response()->json(['status' => 1, 'message' => "invalid OTP"]);
            }
        }
        auth()->login($user);
        return response()->json(['status' => 2, 'message' => "OTP verified"]);
    }

    public function company_updatePassword(Request $request)
    {
        // $request->validate([
        //     'current_password' => ['required', new MatchOldPassword],
        //     'new_password' => ['required'],
        //     'new_confirm_password' => ['same:new_password'],
        // ]);

        $validator = Validator::make($request->all(), [

            'current_password' => ['required', new MatchOldPassword],
            'new_password' => 'required|string|max:255',
            'new_confirm_password' => ['same:new_password'],
        ]);
        if (!$validator->passes()) {

            return response()->json(['status' => 0, 'message' => "failed to update password!", 'error' => $validator->errors()->toArray()]);
        } else {

            $passwordChanged = User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

            if ($passwordChanged) {
                return response()->json(['status' => 1, 'message' => "Password Has Been Successfully updated"]);
            }
        }
    }

    // OTP VERIFICATION
    public function otp_verification_page()
    {
        $toasterValue = 1;
        return view('userNew.singleUser.pages.company.otpVerification', get_defined_vars());
    }

    public function register_send_email(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users'
        ]);

        $toasterValue = 2;
        VerifyToken::where('email', $request->email)->delete();
        $user = User::where('email', $request->email)->first();
        if ($user) {
            $token = rand(111111, 999999);
            VerifyToken::insert([
                'email' => $user->email,
                'token' => $token
            ]);
            Mail::send('emails.verification', ['user' => $user, 'token' => $token], function ($m) use ($user, $token) {
                $m->from('info@dwive758.com', 'medullaEffect');

                $m->to($user->email, $user->name)->subject('Forgot Password Token');
            });

            // return ['status' => true, 'message' => 'OTP has been sent on your Email please check your inbox, also check spam list'];

            return view('userNew.singleUser.pages.company.otpVerification', get_defined_vars());
        } else {

            return ['status' => false, 'message' => "The Email you provided doesn't belong to any account"];
        }

        // return ['status' => true, 'message' => 'OTP has been sent on your Email please check your inbox, also check spam list'];
        // return view('userNew.singleUser.pages.company.otpVerification', get_defined_vars());
    }
}
