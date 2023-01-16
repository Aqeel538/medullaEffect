<?php

namespace App\Http\Controllers\individual\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
            'phone'=>'required',
            // 'address'=>'required',
        ]);
        if($validate){
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

    public function submit_questionair(Request $req){
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

    public function update_user_profile_image (Request $req){
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
    public function update_user_profile(Request $req){
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
}
