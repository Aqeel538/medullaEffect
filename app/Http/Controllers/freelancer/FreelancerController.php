<?php

namespace App\Http\Controllers\freelancer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use App\Models\Service;
use Illuminate\Cache\RetrievesMultipleKeys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FreelancerController extends Controller
{
    public function freelancers_listing()
    {
        $title = 'All Freelancers';
        return view('user.singleUser.pages.freelancer.freelancerListingFrontend', compact('title'));
    }
    public function freelancer_details()
    {
        $title = 'Freelancer Details';
        return view('user.singleUser.pages.freelancer.singleFreelancerDetails', compact('title'));
    }
    public function freelancer_profile()
    {
        $title = 'Profile';
        $user = Auth::user();
        $services = Service::where('user_id', $user->id)->get();
        // dd($services);
        return view('user.singleUser.pages.freelancer.profilepage', compact('title', 'user', 'services'));
    }
    public function control_panel()
    {
        $title = 'Control Panel';
        return view('user.singleUser.pages.freelancer.freelancerControlPanel', compact('title'));
    }
    public function businesses_list()
    {
        $companies = User::where('role', 'company')->get();
        // dd($companies);
        $title = 'Bussiness';
        return view('user.singleUser.pages.freelancer.business', get_defined_vars());
    }
    public function business_details()
    {
        $title = 'Business Details';
        return view('user.singleUser.pages.freelancer.singleBusinessDetail', compact('title'));
    }
    public function chatBot_page()
    {
        $title = "Chat Bot";
        return view('user.singleUser.pages.freelancer.chatbot', compact('title'));
    }
    public function about_service()
    {
        $title = 'About Service';
        return view('user.singleUser.pages.freelancer.aboutService', compact('title'));
    }
    public function add_a_service()
    {
        $title = 'Add A Service';
        $categories = Category::get();
        return view('user.singleUser.pages.freelancer.addService', compact('title', 'categories'));
    }
    public function add_new_service(Request $request)
    {
        $id = Auth::user()->id;
        $service = Service::create([
            'user_id' => $id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'rate' => $request->rate,
            'status' => 1,
            'discription' => $request->description,
        ]);
        return redirect('/freelancer/profile');
    }
    public function pouse_a_service($id)
    {
        $user = Service::where('id', $id)->first();
        if ($user->status == 1) {
            $user->status = 0;
            $data = $user->save();
            if ($data) {
                return redirect()->back();
            }
        } else {
            $user->status = 1;
            $data = $user->save();
            if ($data) {
                return redirect()->back();
            }
        }
    }

    public function edit_a_service($id)
    {
        $title = 'Update A Service';
        $categories = Category::get();
        $service = Service::where('id', $id)->with('Categories')->first();
        // dd($service);
        return view('user.singleUser.pages.freelancer.editService', get_defined_vars());
    }
    public function update_a_service(Request $request)
    {
        $service = Service::find($request->id);
        $service->category_id = $request->category_id;
        $service->title = $request->title;
        $service->rate = $request->rate;
        $service->discription = $request->description;
        $data = $service->save();
        if ($data) {
            return redirect()->route('freelancer.profile');
        }
    }
    public function see_notifications()
    {
        $title = 'Notifications';
        return view('user.singleUser.pages.freelancer.notifications', compact('title'));
    }
}
