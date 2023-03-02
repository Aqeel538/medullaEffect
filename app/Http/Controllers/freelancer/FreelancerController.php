<?php

namespace App\Http\Controllers\freelancer;

use App\Http\Controllers\Controller;
use App\Models\BookService;
use App\Models\Category;
use App\Models\Notification;
use App\Models\SaveService;
use App\Models\User;
use App\Models\Service;
use Illuminate\Cache\RetrievesMultipleKeys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class FreelancerController extends Controller
{
    public function freelancers_listing()
    {
        $title = 'All Freelancers';
        $freelancers = User::where('role', 'freelancer')->where('id', "!=", auth()->user()->id)->get();
        $industryOption = $freelancers;

        return view('userNew.singleUser.pages.freelancer.freelancerListingFrontend', get_defined_vars());
    }
    public function freelancer_details($id)
    {
        $title = 'Freelancer Details';
        $freelancer = User::where('id', $id)->with('services', 'save_freelancer_service')->first();
        $freelancerServices = User::where('id', $id)->with('services.saved_services')->get();
        // dd($freelancerServices);
        $allfreelancers = User::where('role', 'freelancer')->with('services')->get();
        $countServices = User::where('id', $id)->with('services')->first();
        $count = $countServices->services->count();
        return view('userNew.singleUser.pages.freelancer.singleFreelancerDetails', get_defined_vars());
    }
    public function freelancer_profile()
    {
        $title = 'Profile';
        $user = Auth::user();
        $services = Service::where('user_id', $user->id)->get();
        return view('userNew.singleUser.pages.freelancer.profilepage', compact('title', 'user', 'services'));
    }
    public function control_panel()
    {
        $title = 'Control Panel';
        return view('userNew.singleUser.pages.freelancer.freelancerControlPanel', compact('title'));
    }
    public function businesses_list()
    {
        $companies = User::where('role', 'company')->get();
        $industryOption = $companies;
        // dd($companies);
        $title = 'Bussiness';
        return view('userNew.singleUser.pages.freelancer.business', get_defined_vars());
    }
    public function business_details($id)
    {
        $title = 'Business Details';
        $company = User::where('id', $id)->with('save_freelancer_service')->first();
        $companies = User::where('role', 'company')->with('save_freelancer_service')->get();
        // dd($companies);
        return view('userNew.singleUser.pages.freelancer.singleBusinessDetail', get_defined_vars());
    }
    public function chatBot_page()
    {
        $title = "Chat Bot";
        $user_messages = User::where('id', '!=', auth()->user()->id)->get();
        return view('userNew.singleUser.pages.freelancer.chatbot', compact('title', 'user_messages'));
    }
    public function about_service($id)
    {
        $title = 'About Service';
        $aboutService = Service::where('id', $id)->with('Categories')->first();
        // dd($aboutService);
        return view('userNew.singleUser.pages.freelancer.aboutService', get_defined_vars());
    }
    public function add_a_service()
    {
        $title = 'Add A Service';
        $categories = Category::get();
        return view('userNew.singleUser.pages.freelancer.addService', compact('title', 'categories'));
    }
    public function add_new_service(Request $request)
    {
        $validate = $this->validate($request, [
            'category_id' => 'required',
            'title' => 'required',
            'rate' => 'required',
            'description' => 'required',
            // 'address'=>'required',
        ]);

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
        return view('userNew.singleUser.pages.freelancer.editService', get_defined_vars());
    }
    public function update_a_service(Request $request)
    {


        // dd($request);
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

        $notifications = Notification::with('companyGet')->get();
        // dd($notifications[0]->companyGet->image);

        return view('userNew.singleUser.pages.freelancer.notifications', get_defined_vars());
    }

    // SAVE SERVICE
    public function save_service($id)
    {
        // dd($id);
        $userId = auth()->user()->id;
        $checkService = SaveService::where('service_id', $id)->where('user_id', $userId)->first();
        if (isset($checkService) && !empty($checkService)) {
            return redirect()->back()->with('message', 'Updated');
        } else {
            $saveService = new SaveService();
            $saveService->user_id = $userId;
            $saveService->service_id = $id;
            $saveService->save();
        }
        return back();
    }

    public function freelancer_search(Request $request)
    {
        $title = 'All Freelancers';
        $industryOption = User::where('role', 'freelancer')->get();

        if ($request->searchLocation) {
            if ($request->industry) {

                $freelancers = User::where('role', 'freelancer')->where('located_in', $request->searchLocation)->where('industry', $request->industry)->get();

                return view('userNew.singleUser.pages.freelancer.freelancerListingFrontend', get_defined_vars());
            } else {
                $freelancers = User::where('role', 'freelancer')->where('located_in', $request->searchLocation)->get();

                return view('userNew.singleUser.pages.freelancer.freelancerListingFrontend', get_defined_vars());
            }
        }
        if ($request->industry) {
            $freelancers = User::where('role', 'freelancer')->where('industry', $request->industry)->get();

            return view('userNew.singleUser.pages.freelancer.freelancerListingFrontend', get_defined_vars());
        }
        $freelancers = User::where('role', 'freelancer')->get();
        return view('userNew.singleUser.pages.freelancer.freelancerListingFrontend', get_defined_vars());
    }


    public function freelancer_advanceSearchFilter()
    {
        $title = 'Advance search filter';
        $freelancers = User::where('role', 'freelancer')->where('status', 1)->get();
        $industryOption = $freelancers;
        return view('userNew.singleUser.pages.freelancer.advanceSearchFilter', get_defined_vars());
    }

    public function freelancer_advanceSearch(Request $request)
    {
        $title = 'All Freelancers';
        $location = $request->input('searchLocation');
        $industry = $request->input('industry');
        $experience = $request->input('experience');
        $job_type = $request->input('job_type');
        $date_posted = $request->input('created_at');
        $pay_range = $request->input('pay_range');
        $query = User::query();
        if ($location) {
            $query->where('located_in', 'like', '%' . $location . '%');
        }
        if ($industry) {
            $query->where('industry', $industry);
        }
        if ($experience) {
            $query->where('experience', $experience);
        }
        if ($job_type) {
            $query->where('job_type', $job_type);
        }
        if ($date_posted) {
            $query->whereDate('created_at', $date_posted);
        }
        if ($pay_range) {
            $query->where('pay_range', $pay_range);
        }
        $freelancers = $query->where('role', 'freelancer')->get();
        return view('userNew.singleUser.pages.freelancer.advanceSearchFilter', get_defined_vars());
    }

    // advance search for Company
    public function company_search(Request $request)
    {
        $title = 'All company';
        $industryOption = User::where('role', 'company')->get();

        if ($request->searchLocation) {
            if ($request->industry) {

                $companies = User::where('role', 'company')->where('located_in', $request->searchLocation)->where('industry', $request->industry)->get();

                return view('userNew.singleUser.pages.freelancer.business', get_defined_vars());
            } else {
                $companies = User::where('role', 'company')->where('located_in', $request->searchLocation)->get();

                return view('userNew.singleUser.pages.freelancer.business', get_defined_vars());
            }
        }
        if ($request->industry) {
            $companies = User::where('role', 'company')->where('industry', $request->industry)->get();

            return view('userNew.singleUser.pages.freelancer.business', get_defined_vars());
        }
        $companies = User::where('role', 'company')->get();
        return view('userNew.singleUser.pages.freelancer.business', get_defined_vars());
    }


    public function company_advanceSearchFilter()
    {
        $title = 'Advance search filter';
        $companies = User::where('role', 'company')->where('status', 1)->get();
        $industryOption = $companies;
        return view('userNew.singleUser.pages.freelancer.companyAdvanceSearchFilter', get_defined_vars());
    }

    public function company_advanceSearch(Request $request)
    {
        $title = 'All Companies';
        $location = $request->input('searchLocation');
        $industry = $request->input('industry');
        $experience = $request->input('experience');
        $job_type = $request->input('job_type');
        $date_posted = $request->input('created_at');
        $pay_range = $request->input('pay_range');
        $query = User::query();
        if ($location) {
            $query->where('located_in', 'like', '%' . $location . '%');
        }
        if ($industry) {
            $query->where('industry', $industry);
        }
        if ($experience) {
            $query->where('experience', $experience);
        }
        if ($job_type) {
            $query->where('job_type', $job_type);
        }
        if ($date_posted) {
            $query->whereDate('created_at', $date_posted);
        }
        if ($pay_range) {
            $query->where('pay_range', $pay_range);
        }
        $companies = $query->where('role', 'company')->get();
        return view('userNew.singleUser.pages.freelancer.companyAdvanceSearchFilter', get_defined_vars());
    }


    // company setting
    public function freelancer_setting()
    {
        $title = "Setting";
        $user = Auth::user();
        return view('userNew.singleUser.pages.freelancer.setting', get_defined_vars());
    }

    public function userChangeStatus(Request $request)
    {

        Log::info($request->all());
        $user = User::find($request->user_id);
        $user->is_active = $request->status;
        $user->save();

        return response()->json(['success' => 'Status change successfully.']);
    }

    public function deactivate($id)
    {

        $user = User::find($id);
        $user->deactivate = 1;
        $user->save();

        return back();
        // return response()->json(['success' => 'Status change successfully.']);
    }

    // Book a service
    public function book_service($id)
    {
        $user_id = auth()->user()->id;
        $checkService = BookService::where('service_id', $id)->where('user_id', $user_id)->first();
        if ($checkService) {

            return redirect()->back()->with('message', 'Updated');
        } else {

            $bookService = new BookService();
            $bookService->user_id = $user_id;
            $bookService->service_id = $id;
            $bookService->save();
            return back();
        }
    }

    // update user profile
    public function update_freelancer_profile(Request $req)
    {
        // dd($req);
        $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            // 'gender' => 'required',
            'phone' => 'required',
            // 'job_type' => 'required',
            // 'located_in' => 'required',
            // 'relocate' => 'required',
            // 'work_type' => 'required',
            // 'industry_and_position' => 'required',
            // 'pay_range' => 'required',
            // 'nationality' => 'required',
            // 'employees' => 'required',
            // 'employees_limit' => 'required',

        ]);

        $id = Auth::user()->id;
        $profile = User::whereId($id)->update([
            'name' => $req['name'],
            'email' => $req['email'],
            // 'gender' => $req['gender'],
            'phone' => $req['phone'],
            'job_type' => $req['job_type'],
            'city' => $req['city'],
            'state' => $req['state'],
            'zip_code' => $req['zip_code'],
            'located_in' => $req['located_in'],
            'relocate' => $req['relocate'],
            'work_type' => $req['work_type'],
            'industry_and_position' => $req['industry_and_position'],
            'pay_range' => $req['pay_range'],
            'nationality' => $req['nationality'],
            'employees' => $req['employees'],
            'employees_limit' => $req['employees_limit'],
            'description' => $req['description'],


        ]);




        return back();
    }
}
