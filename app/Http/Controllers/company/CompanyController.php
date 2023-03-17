<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Archive;
use App\Models\Category;
use App\Models\CompanySaveForLater;
use App\Models\Job;
use App\Models\Notification;
use App\Models\SaveForLater;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

// use Symfony\Component\HttpFoundation\Session\Session;

class CompanyController extends Controller
{
    public function copmanyDashboard()
    {
        // $toasterValue = 0;
        $user = Auth::user();
        $nameParts = explode(' ', $user->name);
        $phoneParts = explode(' ', $user->phone);
        // dd($phoneParts);
        $title = 'Company dashboard';
        return view('userNew.singleUser.pages.company.dashboard', get_defined_vars());
    }

    public function allFreelancer()
    {
        $title = 'All freelancers';
        $freelancers = User::where('role', 'freelancer')->where('status', 1)->get();
        $industryOption = $freelancers;
        return view('userNew.singleUser.pages.company.freelancer', get_defined_vars());
    }

    public function update_company_profile(Request $req)
    {
        // dd($req);

        // dd($req->dial_code);
        $req->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
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
            // 'name' => $req['name'],
            'name' => $req['first_name'] . " " . $req['last_name'],
            'email' => $req['email'],
            // 'gender' => $req['gender'],
            // 'phone' => '+' . $req->dial_code . $req['phone'],
            'phone' => $req['phone'],
            'company_name' => $req['company_name'],
            'website' => $req['website'],
            'industry' => $req['industry'],
            'address' => $req['address'],
            'city' => $req['city'],
            'state' => $req['state'],
            'zip_code' => $req['zip_code'],

        ]);

        if ($profile) {
            $toasterValue = 1;
            session()->put('toasterValue', $toasterValue);
            return back();
        } else {
            $toasterValue = 2;
            session()->put('toasterValue', $toasterValue);

            return back();
        }
    }

    public function update_company_dashboard(Request $req)
    {

        $req->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',

            'phone' => 'required',

        ]);

        $id = Auth::user()->id;
        $profile = User::whereId($id)->update([

            'name' => $req['first_name'] . " " . $req['last_name'],
            'email' => $req['email'],

            // 'phone' => '+' . $req->dial_code . " " . $req['phone'],
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
            'experience' => $req['experience'],
            'description' => $req['description'],


        ]);

        if ($profile) {
            $toasterValue = 1;
            session()->put('toasterValue', $toasterValue);
            return back();
        } else {
            $toasterValue = 2;
            session()->put('toasterValue', $toasterValue);

            return back();
        }
    }

    // COMPANY JOBS
    public function company_jobs()
    {
        $title = 'All Jobs';
        $user = Auth::user();
        $user_id = auth()->user()->id;
        $allJobs = Job::where('user_id', $user_id)->get();
        return view('userNew.singleUser.pages.company.profile', get_defined_vars());
    }
    public function company_jobs_form($id)
    {
        $title = 'New Job';
        $obj = array();
        if (isset($id) && !empty($id)) {
            $obj = Job::whereId($id)->with('Categories')->first();

            $rateParts = explode(' ', $obj->rate);
            $salaryRangeFrom = $rateParts[0];
            $salaryRangeTo = $rateParts[2];
            // dd($salaryRangeTo);
        }
        $categories = Category::get();
        return view('userNew.singleUser.pages.company.newJob', get_defined_vars());
    }

    public function company_jobs_store(Request $req, $id)
    {

        $user_id = auth()->user()->id;
        if (isset($id) && !empty($id)) {
            $obj = Job::whereId($id)->update([
                'user_id' => $user_id,
                'company_name' => $req->company_name,
                'title' => $req->title,
                'category_id' => $req->category_id,
                'rate' => $req->salaryRangeFrom . ' ' . '-' . ' ' . $req->salaryRangeTo,
                'job_type' => $req->job_type,
                'city' => $req->city,
                'state' => $req->state,
                'zip_code' => $req->zip_code,
                'work_type' => $req->work_type,
                'hiring_type' => $req->hiring_type,
                'experience' => $req->experience,
                'located_in' => auth()->user()->located_in,
                'industry' => auth()->user()->industry,
                'short_description' => $req->short_description,
                'description' => $req->description,



            ]);
            if ($obj) {
                $toasterValue = 3;
                session()->put('toasterValue', $toasterValue);
                return redirect(route('company.jobPost'));
            } else {
                $toasterValue = 2;
                session()->put('toasterValue', $toasterValue);

                return redirect(route('company.jobPost'));
            }
            return redirect(route('company.jobPost'));
        } else {
            //Create
            $obj = Job::create([
                'user_id' => $user_id,
                'company_name' => $req->company_name,
                'title' => $req->title,
                'category_id' => $req->category_id,
                'rate' => $req->salaryRangeFrom . ' ' . '-' . ' ' . $req->salaryRangeTo,
                'job_type' => $req->job_type,
                'city' => $req->city,
                'state' => $req->state,
                'zip_code' => $req->zip_code,
                'work_type' => $req->work_type,
                'hiring_type' => $req->hiring_type,
                'experience' => $req->experience,
                'located_in' => auth()->user()->located_in,
                'industry' => auth()->user()->industry,
                'short_description' => $req->short_description,
                'description' => $req->description,
                'status' => '1',
            ]);
            $jobId = $obj->id;
            $notification = Notification::create([
                'userId' => $user_id,
                'jobId' => $jobId,
                'title' => $req->title,
                'subject' => $req->description,
            ]);

            // for relation write in migration
            // $table->foreign('user_id')
            // ->references('id')
            // ->on('users')
            // ->onDelete('cascade');
            //  public function user()
            //  {
            //      return $this->belongsTo(User::class);
            //  }

            if ($obj) {
                $toasterValue = 1;
                session()->put('toasterValue', $toasterValue);
                return redirect(route('company.jobPost'));
            } else {
                $toasterValue = 2;
                session()->put('toasterValue', $toasterValue);

                return redirect(route('company.jobPost'));
            }
            return redirect(route('company.jobPost'));
        }
    }

    public function company_jobs_delete(Request $req)
    {
        // $validate = $this->validate($req, [
        //     'id' => 'required|exists:jobs,id',

        // ]);
        $archiveDetele = Archive::where('job_id', $req->id)->delete();

        $archiveDetele = SaveForLater::where('job_id', $req->id)->delete();
        $notificationDetele = Notification::where('jobId', $req->id)->delete();
        $delete = Job::destroy($req->id);

        // check data deleted or not
        if ($delete == 1) {
            $success = true;
            $message = "Job deleted successfully";
        } else {
            $success = true;
            $message = "Job not found";
        }

        //  return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }

    public function company_archiveJob($id)
    {

        $userId = auth()->user()->id;
        // $checkJob = Archive::where('job_id', $id)->first();
        $checkJob = Archive::where('job_id', $id)->where('user_id', $userId)->first();
        if (isset($checkJob) && !empty($checkJob)) {

            $toasterArchive = 1;
            session()->put('toasterArchive', $toasterArchive);

            return redirect()->back()->with('message', 'Updated');
        } else {
            $archiveJob = new Archive();
            $archiveJob->user_id = $userId;
            $archiveJob->job_id = $id;
            $toasterArchive = $archiveJob->save();

            if ($toasterArchive) {
                $toasterArchive = 2;
                session()->put('toasterArchive', $toasterArchive);
                return back();
            } else {
                $toasterArchive = 3;
                session()->put('toasterArchive', $toasterArchive);

                return back();
            }
        }
        return back();
    }

    public function company_unArchiveJob(Request $req)
    {
        // $validate = $this->validate($req, [
        //     'id' => 'required|exists:jobs,id',

        // ]);
        $delete = Archive::destroy($req->id);
        if ($delete) {
            $toasterArchive = 4;
            session()->put('toasterArchive', $toasterArchive);
            return back();
        } else {
            $toasterArchive = 3;
            session()->put('toasterArchive', $toasterArchive);

            return back();
        }
        return back();
    }

    // Saved for later
    public function saved_list()
    {
        $title = 'Saved list';
        $user = auth()->user()->id;
        $freelancers = CompanySaveForLater::where('user_id', $user)->with('services.Users')->get();
        // dd($freelancers->services);
        $industryOption = $freelancers;
        return view('userNew.singleUser.pages.company.savedList', get_defined_vars());
    }
    public function company_saveForLater($id)
    {

        $userId = auth()->user()->id;
        // $checkJob = Archive::where('job_id', $id)->first();
        $checkSaved = CompanySaveForLater::where('saved_id', $id)->where('user_id', $userId)->first();
        if (isset($checkSaved) && !empty($checkSaved)) {

            $toasterSaveforlater = 1;
            session()->put('savedForLater', $toasterSaveforlater);

            return redirect()->back()->with('message', 'Updated');
        } else {
            $saveForLater = new CompanySaveForLater();
            $saveForLater->user_id = $userId;
            $saveForLater->saved_id = $id;
            $toasterSaveforlater = $saveForLater->save();

            if ($toasterSaveforlater) {
                $toasterSaveforlater = 2;
                session()->put('savedForLater', $toasterSaveforlater);
                return back();
            } else {
                $toasterSaveforlater = 3;
                session()->put('savedForLater', $toasterSaveforlater);

                return back();
            }
        }
        return back();
    }

    public function company_jobPost()
    {
        $title = 'Job post';
        $user_id = Auth::user()->id;
        $jobsPosted = Job::where('user_id', $user_id)->with('archived_jobs')->get();
        $archiveJobs = Archive::where('user_id', $user_id)->with('getjob')->get();
        // dd($archiveJobs->job->title);
        return view('userNew.singleUser.pages.company.jobPost', get_defined_vars());
    }

    public function changeJobStatus($status, $id)
    {
        $order = Job::where('id', $id)->first();
        $order->status = $status;
        $order->update();
        return redirect()->back();
    }

    public function company_jodDetails($id)
    {
        $title = 'Job Detail';
        $jobDetail = Job::where('id', $id)->first();
        return view('userNew.singleUser.pages.company.jobDetails', get_defined_vars());
    }
    public function company_freelancerAdvanceSearchFilter()
    {
        $title = 'Advance search filter';
        $freelancers = User::where('role', 'freelancer')->where('status', 1)->get();
        $industryOption = $freelancers;
        return view('userNew.singleUser.pages.company.advanceSearchFilter', get_defined_vars());
    }

    public function company_freelancer_search(Request $request)
    {
        $title = 'All Freelancers';
        $industryOption = User::where('role', 'freelancer')->get();

        if ($request->searchLocation) {
            if ($request->industry) {

                $freelancers = User::where('role', 'freelancer')->where('located_in', $request->searchLocation)->where('industry', $request->industry)->get();

                return view('userNew.singleUser.pages.company.freelancer', get_defined_vars());
                return back(get_defined_vars());
            } else {
                $freelancers = User::where('role', 'freelancer')->where('located_in', $request->searchLocation)->get();

                return view('userNew.singleUser.pages.company.freelancer', get_defined_vars());
            }
        }
        if ($request->industry) {
            $freelancers = User::where('role', 'freelancer')->where('industry', $request->industry)->get();

            return view('userNew.singleUser.pages.company.freelancer', get_defined_vars());
        }

        $freelancers = User::where('role', 'freelancer')->get();
        return view('userNew.singleUser.pages.company.freelancer', get_defined_vars());
    }

    public function company_freelancer_advanceSearch(Request $request)
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
            $query->whereDate('created_at', 'like', '%' . $date_posted . '%');
        }
        if ($pay_range) {
            $query->where('pay_range', $pay_range);
        }
        $freelancers = $query->where('role', 'freelancer')->get();

        return view('userNew.singleUser.pages.company.advanceSearchFilter', get_defined_vars());
    }

    public function company_freelancer_services($id)
    {
        $title = 'Freelancer Services';
        $freelancerServices = User::where('id', $id)->with('services')->first();
        $count = $freelancerServices->services->count();
        // dd($freelancerServices);
        return view('userNew.singleUser.pages.company.freelancerServices', get_defined_vars());
    }
    public function service_detail($id)
    {
        $title = 'Service detail';
        $aboutService = Service::where('id', $id)->with('Categories')->first();
        // dd($aboutService);
        return view('userNew.singleUser.pages.company.serviceDetail', get_defined_vars());
    }

    // Individual
    public function allIndividual()
    {
        $title = 'All Individual';
        $individuals = User::where('role', 'individual')->get();
        // dd($individuals);
        $industryOption = $individuals;

        return view('userNew.singleUser.pages.company.individual', get_defined_vars());
    }


    public function company_individual_search(Request $request)
    {
        $title = 'All Individuals';
        $industryOption = User::where('role', 'individual')->get();

        if ($request->searchLocation) {
            if ($request->industry) {

                $individuals = User::where('role', 'individual')->where('located_in', $request->searchLocation)->where('industry', $request->industry)->get();

                return view('userNew.singleUser.pages.company.individual', get_defined_vars());
                return back(get_defined_vars());
            } else {
                $individuals = User::where('role', 'individual')->where('located_in', $request->searchLocation)->get();

                return view('userNew.singleUser.pages.company.individual', get_defined_vars());
            }
        }
        if ($request->industry) {
            $individuals = User::where('role', 'individual')->where('industry', $request->industry)->get();

            return view('userNew.singleUser.pages.company.individual', get_defined_vars());
        }

        $individuals = User::where('role', 'individual')->get();
        return view('userNew.singleUser.pages.company.individual', get_defined_vars());
    }

    public function company_individualAdvanceSearchFilter()
    {
        $title = 'Advance search filter';
        $individuals = User::where('role', 'individual')->where('status', 1)->get();
        $industryOption = $individuals;
        return view('userNew.singleUser.pages.company.individualAdvanceSearchFilter', get_defined_vars());
    }

    public function company_individual_advanceSearch(Request $request)
    {


        $title = 'All Individuals';
        $location = $request->input('searchLocation');
        $industry = $request->input('industry');
        $experience = $request->input('experience');
        $job_type = $request->input('job_type');
        $date_posted = $request->input('created_at');
        // $date = \Carbon\Carbon::createFromFormat('m/d/Y', $date_posted)->format('Y-m-d');
        // dd($date);
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
            $query->whereDate('created_at', 'like', '%' . $date_posted . '%');
        }
        if ($pay_range) {
            $query->where('pay_range', $pay_range);
        }
        $individuals = $query->where('role', 'individual')->get();

        return view('userNew.singleUser.pages.company.individualAdvanceSearchFilter', get_defined_vars());
    }

    // APPLICANTS
    public function company_allApplicants($id = null)
    {

        $title = 'All Applicants';
        $user = auth()->user()->id;
        $postedJobs = Job::where('user_id', $user)->with('Categories')->get();
        // dd($postedJobs);
        $getAllApplicants = Application::where('job_id', $id)->with('users')->get();
        // dd($getAllApplicants);
        return view('userNew.singleUser.pages.company.applicants', get_defined_vars());
    }
    public function company_applicantResume($id = null)
    {

        $title = 'Applicant Resume';
        $applicantResume = User::where('id', $id)->first();
        $applicant = Application::where('applicant_id', $id)->with('users', 'archivedApplication')->first();
        // dd($applicant);
        return view('userNew.singleUser.pages.company.applicantResume', get_defined_vars());
    }
    public function delete_applicants($id = null)
    {
        $delete = Application::where('applicant_id', $id)->delete($id);
        if ($delete) {

            return redirect('/company/allApplicants');
        } else {
            return redirect('/company/allApplicants');
        }
    }

    public function accept_applicants($id = null)
    {
        $user_id = Application::where('applicant_id', $id)->first();
        if ($user_id) {
            $user_id->status = '1';
            $user_id->save();
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    // Chat
    public function company_chatBot_page()
    {
        $title = "company Chat Bot";

        return view('userNew.singleUser.pages.company.chatbot', compact('title'));
    }

    // company setting
    public function comapny_setting()
    {
        $title = "Setting";
        $user = Auth::user();
        $nameParts = explode(' ', $user->name);
        // $firstName = $nameParts[0];
        // $lastName = $nameParts[1];
        return view('userNew.singleUser.pages.company.setting', get_defined_vars());
    }

    public function company_userChangeStatus(Request $request)
    {
        // dd($request);
        Log::info($request->all());
        $user = User::find($request->user_id);
        $user->is_active = $request->status;
        $user->save();

        return response()->json(['success' => 'Status change successfully.']);
    }

    public function deactivate(request $request)
    {
        $validator = Validator::make($request->all(), [
            'feed_back' => 'required|string|max:255',


        ]);
        if (!$validator->passes()) {

            return response()->json(['status' => 0, 'message' => "failed deactivate!", 'error' => $validator->errors()->toArray()]);
        } else {

            $user = User::find($request->user_id);
            $user->status = 0;
            $deactivated = $user->save();



            if ($deactivated) {
                return response()->json(['status' => 1, 'message' => "deactivated"]);
            }
        }
        // dd($request);
        // $user = User::find($request->user_id);
        // $user->status = 0;
        // $user->save();

        // return back();
        // return response()->json(['success' => 'Status change successfully.']);
    }


    // Notification
    public function company_notifications()
    {
        $title = 'Company|Notifications';

        $notifications = Notification::with('companyGet')->get();
        // dd($notifications[0]->companyGet->image);

        return view('userNew.singleUser.pages.company.notifications', get_defined_vars());
    }
}
