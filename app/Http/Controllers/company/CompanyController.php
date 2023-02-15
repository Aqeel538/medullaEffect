<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Archive;
use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function copmanyDashboard()
    {
        $user = Auth::user();
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
        return back();
    }

    // COMPANY JOBS
    public function company_jobs()
    {
        $title = 'All Jobs';
        $allJobs = Job::get();
        return view('userNew.singleUser.pages.company.job', get_defined_vars());
    }
    public function company_jobs_form($id)
    {
        $title = 'New Job';
        $obj = array();
        if (isset($id) && !empty($id)) {
            $obj = Job::whereId($id)->with('Categories')->first();
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
                'title' => $req->title,
                'category_id' => $req->category_id,
                'rate' => $req->rate,
                'description' => $req->description,

            ]);
        } else {
            //Create
            $obj = Job::create([
                'user_id' => $user_id,
                'title' => $req->title,
                'category_id' => $req->category_id,
                'rate' => $req->rate,
                'description' => $req->description,
            ]);
        }
        return redirect(route('company.jobs'));
    }

    public function company_jobs_delete(Request $req)
    {

        $archiveDetele = Archive::where('job_id', $req->id)->delete();

        $delete = Job::destroy($req->id);

        // check data deleted or not
        if ($delete == 1) {
            $success = true;
            $message = "User deleted successfully";
        } else {
            $success = true;
            $message = "User not found";
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
        if ($checkJob = Archive::where('job_id', $id)->first()) {
            return redirect()->back()->with('message', 'Updated');
        }
        $archiveJob = new Archive();
        $archiveJob->user_id = $userId;
        $archiveJob->job_id = $id;
        $archiveJob->save();

        return back();
    }

    public function company_jobPost()
    {
        $title = 'Job post';
        $user_id = Auth::user()->id;
        $jobsPosted = Job::where('user_id', $user_id)->get();
        $archiveJobs = Archive::where('user_id', $user_id)->with('getjob')->get();
        // dd($archiveJobs->job->title);
        return view('userNew.singleUser.pages.company.jobPost', get_defined_vars());
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
        $freelancers = $query->get();

        return view('userNew.singleUser.pages.company.advanceSearchFilter', get_defined_vars());
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
        $individuals = $query->get();

        return view('userNew.singleUser.pages.company.individualAdvanceSearchFilter', get_defined_vars());
    }

    // APPLICANTS
    public function company_allApplicants($id = null)
    {

        $title = 'All Applicants';
        $user = auth()->user()->id;
        $postedJobs = Job::where('user_id', $user)->with('Categories')->get();
        $getAllApplicants = Application::where('job_id', $id)->with('users')->get();
        // dd($getAllApplicants);
        return view('userNew.singleUser.pages.company.applicants', get_defined_vars());
    }
    public function company_applicantResume($id = null)
    {

        $title = 'Applicant Resume';
        $applicantResume = User::where('id', $id)->first();
        // dd($applicantResume);
        return view('userNew.singleUser.pages.company.applicantResume', get_defined_vars());
    }

    // Chat
    public function company_chatBot_page()
    {
        $title = "company Chat Bot";

        return view('userNew.singleUser.pages.company.chatbot', compact('title'));
    }
}