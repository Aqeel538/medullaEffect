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
                'role' => 'freelancer',
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
}
