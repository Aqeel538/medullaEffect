<?php

namespace App\Http\Controllers\individual\Auth;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use App\Models\User;
use App\Models\VerifyToken;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;



class RegistrationControllerInd extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function create(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);


        if (!$validator->passes()) {

            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            $user =  User::create([
                'name' => $request['first_name'] . ' ' . $request['last_name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'address' => $request['address'],
                'company_name' => $request['company_name'],
                'website' => $request['website'],
                'phone' => '+' . $request->dial_code . $request['phone'],
                'industry' => $request['industry'],
                'contact' => $request['contact'],
                'role' => 'individual',
                'status' => 1,
            ]);

            VerifyToken::where('email', $request->email)->delete();
            $user = User::where('email', $request->email)->first();
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


    public function submit_questionair(Request $req)
    {
        // dd($id);
        $id = Auth::user()->id;
        $questionair = User::whereId($id)->update([
            'gender' => $req['gender'],
            'job_type' => $req['job_type'],
            'located_in' => $req['located_in'],
            'relocate' => $req['relocate'],
            'work_type' => $req['work_type'],
            'industry_and_position' => $req['industry_and_position'],
            'pay_range' => $req['pay_range'],
            'experience' => $req['experience'],
            'nationality' => $req['nationality'],
            'questionaire_submit' => 1,
        ]);
        // return redirect(route('profile'));
        return redirect()->route('profile', $id);
    }

    public function update_user_profile_image(Request $req)
    {
        // $validation = Validator::make($req->all(), [
        //     'data' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        //    ]);
        //    if($validation->passes())
        //    {
        //     $image = $req->file();
        //     $new_name = 111 . '.' . $image->getClientOriginalExtension();

        //     $id = Auth::user()->id;
        // $questionair = User::whereId($id)->update([
        //     'image' => $new_name
        // ]);
        //     $image->move(public_path('uploads'), $new_name);
        //     return response()->json([
        //      'message'   => 'Image Upload Successfully',
        //      'uploaded_image' => '<img src="/images/'.$new_name.'" class="img-thumbnail" width="300" />',
        //      'class_name'  => 'alert-success'
        //     ]);
        //    }
        //    else
        //    {
        return response()->json([
            'message'   => "dd",

        ]);
    }
    public function update_user_profile(Request $req)
    {
        $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'gender' => 'required',
            'phone' => 'required',
            'job_type' => 'required',
            'located_in' => 'required',
            'relocate' => 'required',
            'work_type' => 'required',
            'industry_and_position' => 'required',
            'pay_range' => 'required',
            'nationality' => 'required',


        ]);

        $id = Auth::user()->id;
        $profile = User::whereId($id)->update([
            'name' => $req['name'],
            'email' => $req['email'],
            'gender' => $req['gender'],
            'phone' => $req['phone'],
            'job_type' => $req['job_type'],
            'located_in' => $req['located_in'],
            'relocate' => $req['relocate'],
            'work_type' => $req['work_type'],
            'industry_and_position' => $req['industry_and_position'],
            'experience' => $req['experience'],
            'pay_range' => $req['pay_range'],
            'nationality' => $req['nationality'],
            'experience' => $req['experience'],
            'description' => $req['description'],
        ]);
        return redirect()->route('profile', $id);
    }

    public function edit_image(Request $request)
    {
        // dd($request->image);
        $id = Auth()->user()->id;
        if ($id) {
            if ($request->file('image')) {
                $imageName = time() . rand(9, 999) . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/user'), $imageName);
                User::whereId($id)->update([
                    'image' => $imageName,
                ]);
                return response()->json([
                    'status' => 200,
                    'image' => $request->file(),
                ]);
            } else {
                return response()->json([
                    "status" => 404,
                    'message' => 'Image not upload',
                ]);
            }
        }
    }

    // update resume


    public function upload_resume(Request $request)
    {
        $id = Auth()->user()->id;
        if ($id) {
            if ($request->file('resume')) {
                $imageName = time() . rand(9, 999) . '.' . $request->resume->extension();
                $request->resume->move(public_path('uploads/user/resumes'), $imageName);
                User::whereId($id)->update([
                    'resume' => $imageName,
                ]);
                return response()->json([
                    'status' => 200,
                    'image' => $request->file(),
                ]);
            } else {
                return response()->json([
                    "status" => 404,
                    'message' => 'resume not upload',
                ]);
            }
        }
    }

    // FORGOT PASSWORD
    public function forgot_password()
    {
        return view('auth.forgotPassword.sendEmail');
        // return view('auth.forgotPassword.otpVerification');
    }

    public function otp_verification_page()
    {
        return view('auth.forgotPassword.otpVerification');
    }

    public function send_email(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users'
        ]);
        session()->put('email', $request->email);
        // requestValidate($request, [
        //     "email" => "required|email|exists:users"

        // ]);
        if (!$validator->passes()) {

            return response()->json(['status' => 0]);
        } else {
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

                return response()->json(['status' => 3, 'message' => "OTP send to your mail"]);
            } else {

                return response()->json(['status' => 4, 'message' => "The Email you provided doesn't belong to any account"]);
            }
        }

        // return ['status' => true, 'message' => 'OTP has been sent on your Email please check your inbox, also check spam list'];
        // return view('auth.forgotPassword.otpVerification', get_defined_vars());
    }

    public function resend_email(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users'
        ]);
        session()->put('email', $request->email);
        // requestValidate($request, [
        //     "email" => "required|email|exists:users"

        // ]);

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

            return back();
        } else {

            return back();
        }
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


    function otp_verification(Request $request)
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
                VerifyToken::where('email', $request->token)->delete();

                // return ['code' => 200, 'status' => true, 'message' => 'Registered Successfully', 'data' => $user, 'access_token' => $user->createToken($request->email)->plainTextToken];

            } else {

                return response()->json(['status' => 1, 'message' => "invalid OTP"]);
            }
            // return view('auth.forgotPassword.resetPassword', get_defined_vars());
            return response()->json(['status' => 2, 'message' => "OTP verified"]);
        }
    }

    public function reset_password_page()
    {
        return view('auth.forgotPassword.resetPassword');
    }

    function reset_password(Request $request)
    {

        $request->validate([
            "password" => "required"
        ]);



        $result = User::where('email', $request->email)->update([
            'password' => Hash::make($request->password)
        ]);

        if (isset($result) && !empty($result)) {
            // dd('ok');
            return redirect('/login');
        } else {
            // dd('ok');
            return redirect('/resetPassword');
        }


        // $token = VerifyToken::where('token', $request->token)->first();
        // if ($token) {
        //     User::where('email', $token->email)->update([
        //         'password' => Hash::make($request->password)
        //     ]);
        //     VerifyToken::where('token', $request->token)->delete();
        //     $user = User::where('email', $token->email)->first();

        //     return ['status' => true, 'message' => 'Password Reset Successfully', 'data' => $user, 'access_token' => $user->createToken($token->email)->plainTextToken];
        // } else {

        //     return ['status' => true, 'message' => 'Invalid OTP'];
        // }
    }

    public function updatePassword(Request $request)
    {
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
}
