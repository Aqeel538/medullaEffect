<?php

namespace App\Http\Controllers\individual\Auth;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use App\Models\User;
use App\Models\VerifyToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
    public function create(Request $data)
    {
        $validate = $this->validate($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|',
            'phone' => 'required',
            // 'address'=>'required',
        ]);
        if ($validate) {
            $user =  User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'address' => $data['address'],
                'company_name' => $data['company_name'],
                'website' => $data['website'],
                'phone' => $data['phone'],
                'industry' => $data['industry'],
                'contact' => $data['contact'],
                'role' => 'individual',
                'status' => 1,
            ]);
        } else {
            echo 'Errors';
        }
        // $validToken = rand(10, 100..'2023');
        // $get_token = new VerifyToken();
        // $get_token->token = $validToken;
        // $get_token->email = $data['email'];
        // $get_token->save();

        // $get_user_email = $data['email'];
        // $get_user_name = $data['name'];

        // \Mail::to($data['email'])->send(new EmailVerificationMail($get_user_email, $get_user_name, $validToken));
        $user_id = $user->id;
        // dd($user_id);
        // return redirect('/questinare/',$user_id);
        // return $user;
        return redirect()->route('questinare');
    }

    public function submit_questionair(Request $req)
    {
        // dd($id);
        $id = Auth::user()->id;
        $questionair = User::whereId($id)->update([
            'gender' => $req['gender'],
            'job_type' => $req['job_type'],
            'located_in' => $req['located_in'],
            'work_type' => $req['work_type'],
            'industry_and_position' => $req['industry_and_position'],
            'pay_range' => $req['pay_range'],
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
        $id = Auth::user()->id;
        $profile = User::whereId($id)->update([
            'name' => $req['name'],
            'email' => $req['email'],
            'gender' => $req['gender'],
            'phone' => $req['phone'],
            'job_type' => $req['job_type'],
            'located_in' => $req['located_in'],
            'work_type' => $req['work_type'],
            'industry_and_position' => $req['industry_and_position'],
            'pay_range' => $req['pay_range'],
            'nationality' => $req['nationality'],
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
        $request->validate([
            'email' => 'required|email|exists:users'
        ]);

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

            return view('auth.forgotPassword.otpVerification', get_defined_vars());
        } else {

            return ['status' => false, 'message' => "The Email you provided doesn't belong to any account"];
        }

        // return ['status' => true, 'message' => 'OTP has been sent on your Email please check your inbox, also check spam list'];
        return view('auth.forgotPassword.otpVerification', get_defined_vars());
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

        // $request->validate([
        //     "o" => "required",
        //     "t" => "required",
        //     "p" => "required",
        //     "v" => "required",
        //     "e" => "required",
        //     "r" => "required",
        // ]);
        $token = $request->o . $request->t . $request->p . $request->v . $request->e . $request->r;
        dd($token);
        $token = VerifyToken::where('token', $request->token)->first();
        if (isset($token) && !empty($token)) {
            User::where('email', $token->email)->update([
                'is_verified' => 1
            ]);

            $user = User::where('email', $token->email)->first();
            VerifyToken::where('token', $request->token)->delete();

            // return ['code' => 200, 'status' => true, 'message' => 'Registered Successfully', 'data' => $user, 'access_token' => $user->createToken($request->email)->plainTextToken];

        } else {

            return ['status' => false, 'message' => 'Invalid OTP'];
        }
        return view('auth.forgotPassword.resetPassword', get_defined_vars());
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
}
