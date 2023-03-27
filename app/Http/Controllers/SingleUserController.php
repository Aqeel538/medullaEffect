<?php

namespace App\Http\Controllers;

use App\Models\DismissNotification;
use App\Models\Job;
use App\Models\LeadForm;
use App\Models\Notification;
use App\Models\SeenNotification;
use App\Models\Service;
use App\Models\Subscriber;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class SingleUserController extends Controller
{
    //Individual User views

    public function advance_fillter()
    {
        $title = "Advance Filter";
        return view('user.singleUser.pages.individual.advanceFillter', compact('title'));
    }

    public function  applied()
    {
        $title = "Applied";
        return view("user.singleUser.pages.individual.applied", compact('title'));
    }

    public function companay()
    {
        $title = "Company Sign-up";
        if (!Auth::check()) {
            return view('userNew.singleUser.pages.company.companay', compact('title'));
        }
        return redirect('/company/profile');
    }

    public function freelancer()
    {
        $title = "Freelancer Sign-up";

        if (!Auth::check()) {
            return view('userNew.singleUser.pages.freelancer.freelancer', compact('title'));
        }
        return redirect('/freelancer/profile');
    }

    public function individual()
    {
        $title = "Individual Sign-up";

        if (!Auth::check()) {
            return view('userNew.singleUser.pages.individual.individual', compact('title'));
        }
        return redirect('/profile');
    }

    public function tagline()
    {
        $title = "Tagline";
        return view('user.singleUser.pages.individual.tagline', compact('title'));
    }

    public function index()
    {
        $title = "Home";
        return view('userNew.singleUser.pages.index', compact('title'));
    }
    public function search(request $request)
    {
        // dd($request);
        $title = "search";

        if ($request->searchLocation) {
            if ($request->industry) {
                $results = Job::where('located_in', $request->searchLocation)->where('industry', $request->industry)->with('users', 'applied_jobs')->get();

                return view('userNew.singleUser.pages.search', get_defined_vars());
            } else {

                $results = Job::where('located_in', $request->searchLocation)->with('users', 'applied_jobs')->get();

                return view('userNew.singleUser.pages.search', get_defined_vars());
            }
        }


        if ($request->industry) {

            $results = Job::where('industry', $request->industry)->with('users', 'applied_jobs')->get();

            return view('userNew.singleUser.pages.search', get_defined_vars());
        }


        $results = Job::with('users', 'applied_jobs')->get();
        return view('userNew.singleUser.pages.search', get_defined_vars());



        // $query = $request->get('search');
        // if ($request->category == 'job') {
        //     $results = Job::where('title', 'like', '%' . $query . '%')->get();
        // } else {
        //     $results = Service::where('title', 'like', '%' . $query . '%')->get();
        // }
        // // dd($serviceResults);
        // return view('userNew.singleUser.pages.search', get_defined_vars());
    }
    public function faq()
    {
        $title = "FAQ";
        return view('userNew.singleUser.pages.faq', compact('title'));
    }

    public function submitLeadForm(Request $request)
    {

        $validator = Validator::make($request->all(), [
            "name" => "required",
            "email" => "required",
            // "fname" => "required",
            // "lname" => "required",
            "phone" => "required",
            "message" => "required",
        ]);
        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()], 200);
        } else {
            $user = new LeadForm();
            // $user->name = $request->name . ' ' . $request->lname;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->message = $request->message;
            $data = $user->save();
            if ($data) {
                return response()->json(['status' => 1, 'message' => "feedback succesfully submit"], 200);
            } else {
                return response()->json(['status' => 2, 'message' => "feedback Not succesfully submit"], 200);
            }
        }
    }

    public function submitSubscriberForm(Request $request)
    {

        $validator = Validator::make($request->all(), [
            "email" => "required",

        ]);
        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()], 200);
        } else {
            $user = new Subscriber();
            $user->email = $request->email;

            $data = $user->save();
            if ($data) {
                return response()->json(['status' => 1, 'message' => "subscribed succesfully"], 200);
            } else {
                return response()->json(['status' => 2, 'message' => "Not subscribed!"], 200);
            }
        }
    }

    public function profile()
    {
        $title = "Profile";

        $user = Auth::user();
        return view('user.singleUser.pages.individual.profile', get_defined_vars());
    }

    public function profile2()
    {
        $title = "Profile";
        return view('user.singleUser.pages.individual.profile2', compact('title'));
    }

    public function questinare()
    {
        $title = "Questinare";
        $user = Auth::user();
        // if ($user) {
        // }
        // else{
        //     return redirect(route('verify'));
        // }
        // dd($user);
        return view('userNew.singleUser.pages.individual.questinare', compact('user', 'title'));
    }

    public function viewJob()
    {
        $title = "View Job";
        return view('user.singleUser.pages.individual.viewJob', compact('title'));
    }

    public function viewJobs()
    {
        $title = "View Jobs";
        return view('user.singleUser.pages.individual.viewJobs', compact('title'));
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

    public function dismissNotification(Request $request)
    {
        // dd($request);
        $user = new DismissNotification();

        $user->user_id = auth()->user()->id;
        $user->notification_id = $request->notification_id;
        $data = $user->save();
        if ($data) {
            // return response()->json(['status' => 1, 'message' => "notification succesfully dismissed"], 200);
            return back();
        } else {
            // return response()->json(['status' => 2, 'message' => "notification not dismissed"], 200);
            return back();
        }
    }

    public function seen_notification($id)
    {
        // dd('ok');
        $title = 'Notifications';
        $checkNotification = SeenNotification::where('notification_id', $id)->where('user_id', auth()->user()->id)->first();
        if ($checkNotification) {

            $notifications = Notification::with('companyGet', 'dismissNotification')
                ->whereDoesntHave('dismissNotification', function ($query) {
                    $query->where('user_id', auth()->user()->id);
                })
                ->get();
            $getLastNotification = Notification::latest('id')->first('id');
            $seenNotification = SeenNotification::where('notification_id', $getLastNotification->id)->where('user_id', auth()->user()->id)->first();
            $latestNotifications = Notification::where('id', '>', $seenNotification->id)->get();
            $countNotification = count($latestNotifications);

            return view('userNew.singleUser.pages.freelancer.notifications', get_defined_vars());
        } else {

            $user = new SeenNotification();
            $user->user_id = auth()->user()->id;
            $user->notification_id = $id;
            $data = $user->save();
            if ($data) {

                // return response()->json(['status' => 1, 'message' => "notification succesfully dismissed"], 200);
                return back();
            } else {

                // return response()->json(['status' => 2, 'message' => "notification not dismissed"], 200);
                return back();
            }
        }
    }
}
