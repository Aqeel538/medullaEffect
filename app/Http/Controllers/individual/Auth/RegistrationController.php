<?php

namespace App\Http\Controllers\individual\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
    function create(array $data)
    {
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
        ]);
        $validToken = rand(10, 100..'2023');
        $get_token = new VerifyToken();
        $get_token->token = $validToken;
        $get_token->email = $data['email'];
        $get_token->save();

        $get_user_email = $data['email'];
        $get_user_name = $data['name'];

        \Mail::to($data['email'])->send(new EmailVerificationMail($get_user_email, $get_user_name, $validToken));

        return $individual;
    }
}
