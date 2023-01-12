<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SingleUserController extends Controller
{
    //Individual User views

    public function advance_fillter()
    {
        return view('user.singleUser.pages.advanceFillter');
    }

    public function applied()
    {
        return view("user.singleUser.pages.applied");
    }

    public function companay()
    {
        return view('user.singleUser.pages.companay');
    }

    public function freelancer()
    {
        return view('user.singleUser.pages.freelancer');
    }

    public function individual()
    {
        return view('user.singleUser.pages.individual');
    }

    public function tagline()
    {
        return view('user.singleUser.pages.tagline');
    }

    public function index()
    {
        return view('user.singleUser.pages.index');
    }

    public function profile($id)
    {
        $user = User::where('id', $id)->first();
        return view('user.singleUser.pages.profile', compact('user'));
    }

    public function profile2()
    {
        return view('user.singleUser.pages.profile2');
    }

    public function questinare($user_id)
    {
        // dd($user_id);
        $user = User::where('id', $user_id)->first();
        // if ($user) {
        // }
        // else{
        //     return redirect(route('verify'));
        // }
        // dd($user);
        return view('user.singleUser.pages.questinare', compact('user'));
    }

    public function viewJob()
    {
        return view('user.singleUser.pages.viewJob');
    }

    public function viewJobs()
    {
        return view('user.singleUser.pages.viewJobs');
    }

    //Individual User Register and uodate Links

    // public function individual_store(Request $request)
    // {
    //     if ($request->check == 1) {
    //         $request->validate([
    //             'email' => 'bail|required|unique:posts|max:255',
    //             'password' => 'required',
    //             'name' => 'required',
    //         ]);
    //         $user = new User();
    //         $user->name = $request->name;
    //         $user->email = $request->email;
    //         $user->password = Hash::make($request->password);
    //         $user->role = 'individual_user';
    //         $user->phone = $request->phone;
    //         $user->address = $request->address;
    //         $user->image = 0;
    //         $user->status = 0;
    //         $user->company_name = $request->company_name;
    //         $user->website = $request->website;
    //         $user->industry = $request->industry;
    //         $user->contact = $request->contact;
    //         $data = $user->save();
    //         $user_id = $user->id;
    //         if ($data) {
    //             return redirect()->route('questinare');
    //         }
    //     }
    // }
}
