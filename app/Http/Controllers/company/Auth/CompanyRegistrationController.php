<?php

namespace App\Http\Controllers\company\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CompanyRegistrationController extends Controller
{
    public function create(Request $data)
    {
        $validate = $this->validate($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
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
                'role' => 'company',
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
        return redirect('/login');
    }
}
