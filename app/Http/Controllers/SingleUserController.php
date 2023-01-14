<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SingleUserController extends Controller
{
    //Individual User views

    public function advance_fillter()
    {
        $title = "Advance Filter";
        return view('user.singleUser.pages.advanceFillter', compact('title'));
    }

    public function applied()
    {
        $title = "Applied";
        return view("user.singleUser.pages.applied", compact('title'));
    }

    public function companay()
    {
        $title = "Company Sign-up";
        return view('user.singleUser.pages.companay', compact('title'));
    }

    public function freelancer()
    {
        $title = "Freelancer Sign-up";
        return view('user.singleUser.pages.freelancer', compact('title'));
    }

    public function individual()
    {
        $title = "Individual Sign-up";
        return view('user.singleUser.pages.individual', compact('title'));
    }

    public function tagline()
    {
        $title = "Tagline";
        return view('user.singleUser.pages.tagline', compact('title'));
    }

    public function index()
    {
        $title = "Home";
        return view('user.singleUser.pages.index', compact('title'));
    }

    public function profile($id)
    {
        $title = "Profile";
        $user = User::where('id', $id)->first();
        return view('user.singleUser.pages.profile', compact('user', 'title'));
    }

    public function profile2()
    {
        $title = "Profile";
        return view('user.singleUser.pages.profile2', compact('title'));
    }

    public function questinare($user_id)
    {
        $title = "Questinare";
        $user = User::where('id', $user_id)->first();
        // if ($user) {
        // }
        // else{
        //     return redirect(route('verify'));
        // }
        // dd($user);
        return view('user.singleUser.pages.questinare', compact('user', 'title'));
    }

    public function viewJob()
    {
        $title = "View Job";
        return view('user.singleUser.pages.viewJob', compact('title'));
    }

    public function viewJobs()
    {
        $title = "View Jobs";
        return view('user.singleUser.pages.viewJobs', compact('title'));
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
