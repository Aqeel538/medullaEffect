<?php

namespace App\Http\Controllers\individual\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\VerifyToken;
use Illuminate\Support\Facades\Hash;
use App\Mail\EmailVerificationMail;

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
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    function create(Request $data)
    {
        $validate = $this->validate($data,[
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'password' => 'required', 'string', 'min:8', 'confirmed',
        ]);
        if($validate){
            $individual =  User::create([
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
        }
        else{
            echo 'Validation Error';
        }
        // $validToken = rand(10, 100..'2023');
        // $get_token = new VerifyToken();
        // $get_token->token = $validToken;
        // $get_token->email = $data['email'];
        // $get_token->save();

        // $get_user_email = $data['email'];
        // $get_user_name = $data['name'];

        // \Mail::to($data['email'])->send(new EmailVerificationMail($get_user_email, $get_user_name, $validToken));
        $user_id = $individual->id;
        // dd($user_id);
        // return redirect('/questinare/',$user_id);
        return redirect()->route('questinare', $user_id);
    }

    public function submit_questionair(Request $req, $id){
        // dd($id);
        $questionair = User::whereId($id)->update([
            'gender' => $req['gender'],
            'job_type' => $req['job_type'],
            'located_in' => $req['located_in'],
            'work_type' => $req['work_type'],
            'industry_and_position' => $req['industry_and_position'],
            'pay_range' => $req['pay_range'],
            'nationality' => $req['nationality'],
        ]);
        // return redirect(route('profile'));
        return redirect()->route('profile', $id);
    }

    public function update_user_profile(Request $req, $id){
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
}
