<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
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
        return view('user.singleUser.pages.company.dashboard', get_defined_vars());
    }

    public function allFreelancer()
    {
        $title = 'All freelancers';
        $freelancers = User::where('role', 'freelancer')->where('status', 1)->get();
        $industryOption = $freelancers;
        return view('user.singleUser.pages.company.freelancer', get_defined_vars());
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
        return view('user.singleUser.pages.company.job', get_defined_vars());
    }
    public function company_jobs_form($id)
    {
        $title = 'New Job';
        $obj = array();
        if (isset($id) && !empty($id)) {
            $obj = Job::whereId($id)->with('Categories')->first();
        }
        $categories = Category::get();
        return view('user.singleUser.pages.company.newJob', get_defined_vars());
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
        Job::whereId($req->id)->delete();
        return back();
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
        return view('user.singleUser.pages.company.jobPost', get_defined_vars());
    }
    public function company_jodDetails($id)
    {
        $title = 'Job Detail';
        $jobDetail = Job::where('id', $id)->first();
        return view('user.singleUser.pages.company.jobDetails', get_defined_vars());
    }
    public function company_advanceSearchFilter()
    {
        $title = 'Advance search filter';
        $freelancers = User::where('role', 'freelancer')->where('status', 1)->get();
        $industryOption = $freelancers;
        return view('user.singleUser.pages.company.advanceSearchFilter', get_defined_vars());
    }

    public function company_freelancer_search(Request $request)
    {
        $title = 'All Freelancers';
        $industryOption = User::where('role', 'freelancer')->get();

        if ($request->searchLocation) {
            if ($request->industry) {

                $freelancers = User::where('role', 'freelancer')->where('located_in', $request->searchLocation)->where('industry', $request->industry)->get();

                return view('user.singleUser.pages.company.freelancer', get_defined_vars());
                return back(get_defined_vars());
            } else {
                $freelancers = User::where('role', 'freelancer')->where('located_in', $request->searchLocation)->get();

                return view('user.singleUser.pages.company.freelancer', get_defined_vars());
            }
        }
        if ($request->industry) {
            $freelancers = User::where('role', 'freelancer')->where('industry', $request->industry)->get();

            return view('user.singleUser.pages.company.freelancer', get_defined_vars());
        }

        $freelancers = User::where('role', 'freelancer')->get();
        return view('user.singleUser.pages.company.freelancer', get_defined_vars());
    }

    public function company_freelancer_advanceSearch(Request $request)
    {
        $title = 'All Freelancers';
        $location = $request->input('searchLocation');
        $industry = $request->input('industry');
        $experience = $request->input('experience');
        $job_type = $request->input('job_type');
        // $date_posted = $request->input('date_posted');
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
        // if ($date_posted) {
        //     $query->where('date_posted', $date_posted);
        // }
        if ($pay_range) {
            $query->where('pay_range', $pay_range);
        }
        $freelancers = $query->get();
        return view('user.singleUser.pages.company.advanceSearchFilter', get_defined_vars());
    }
}
