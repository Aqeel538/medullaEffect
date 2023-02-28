<?php

namespace App\Http\Controllers\freelancer\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\VerifyToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class FreelancerRegistrationController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    public function create(Request $data)
    {
        $validate = $this->validate($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
        if ($validate) {
            // dd($data);
            $user =  User::create([
                'name' => $data['first_name'] . ' ' . $data['last_name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'address' => $data['address'],
                'company_name' => $data['company_name'],
                'website' => $data['website'],
                'phone' => $data['phone'],
                'industry' => $data['industry'],
                'contact' => $data['contact'],
                'role' => 'freelancer',
                'status' => 1,
            ]);
            // return redirect()->route('login');
        } else {
            echo 'Errors';
        }
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
            return redirect('/otp-verification-page');
        } else {

            return ['status' => false, 'message' => "The Email you provided doesn't belong to any account"];
        }
        $user_id = $user->id;

        return redirect('/otp-verification-page');
    }
}
