<?php

namespace App\Http\Controllers\individual;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Job;
use App\Models\Resume;
use App\Models\SaveForLater;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndividualController extends Controller
{

    public function profile()
    {
        $title = "Profile";

        $user = Auth::user();
        $jobsApplied = Application::where('applicant_id', $user)->count();
        return view('userNew.singleUser.pages.individual.profile', get_defined_vars());
    }

    public function individual_jobs()
    {
        $title = 'All Job';
        $user_id = auth()->user()->id;
        $allJobs = User::where('role', 'company')->with('jobs')->get('id');
        $freelancers = User::where('role', 'freelancer')->where('status', 1)->get();
        $industryOption = $freelancers;
        $savedJobs = SaveForLater::where('user_id', $user_id)->with('savedJobs')->get();
        // dd($savedJobs);
        return view('userNew.singleUser.pages.individual.tagline', get_defined_vars());
    }
    public function individual_jobs_search(Request $request)
    {
        $title = 'All Freelancers';
        $industryOption = User::where('role', 'freelancer')->get();
        $savedJobs = SaveForLater::get();
        if ($request->searchLocation) {
            if ($request->industry) {

                $allJobs = User::where('role', 'company')->where('located_in', $request->searchLocation)->where('industry', $request->industry)->with('jobs')->get('id');

                return view('userNew.singleUser.pages.individual.tagline', get_defined_vars());
            } else {
                $allJobs = User::where('role', 'freelancer')->where('located_in', $request->searchLocation)->with('jobs')->get('id');

                return view('userNew.singleUser.pages.individual.tagline', get_defined_vars());
            }
        }
        if ($request->industry) {
            $allJobs = User::where('role', 'company')->where('industry', $request->industry)->with('jobs')->get('id');

            return view('userNew.singleUser.pages.individual.tagline', get_defined_vars());
        }

        $allJobs = User::where('role', 'company')->with('jobs')->get('id');
        return view('userNew.singleUser.pages.individual.tagline', get_defined_vars());
    }

    public function individual_advanceSearchFilter()
    {
        $title = 'Advance search filter';
        $allJobs = User::where('role', 'company')->with('jobs')->get('id');
        $freelancers = User::where('role', 'freelancer')->where('status', 1)->get();
        $industryOption = $freelancers;
        return view('userNew.singleUser.pages.individual.advanceFillter', get_defined_vars());
    }

    public function individual_jobs_advanceSearch(Request $request)
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
            $query->where('located_in', 'like', '%' . $location . '%')->with('jobs')->get('id');
        }
        if ($industry) {
            $query->where('industry', $industry)->with('jobs')->get('id');
        }
        if ($experience) {
            $query->where('experience', $experience)->with('jobs')->get('id');
        }
        if ($job_type) {
            $query->where('job_type', $job_type)->with('jobs')->get('id');
        }
        if ($date_posted) {
            $query->whereDate('created_at', $date_posted)->with('jobs')->get('id');
        }
        if ($pay_range) {
            $query->where('pay_range', $pay_range)->with('jobs')->get('id');
        }
        $allJobs = $query->get();
        return view('userNew.singleUser.pages.individual.advanceFillter', get_defined_vars());
    }

    public function individual_jodDetails($id)
    {
        $title = 'Job Detail';
        $jobDetail = Job::where('id', $id)->with('Users')->first();
        $otherJobs = User::where('role', 'company')->with('jobs')->get();
        $createdAt = $otherJobs[2]->jobs[0]->created_at->diffForHumans();

        // $hours = $jobDetail->created_at->diffForHumans();

        return view('userNew.singleUser.pages.individual.viewJob', get_defined_vars());
    }

    // Applied jobs
    public function individual_appliedJobs()
    {
        $applicant_id = auth()->user()->id;
        $title = 'All Job';
        $appliedJobs = Application::where('applicant_id', $applicant_id)->with('getAppliedJobs')->get();
        // dd($appliedJobs);
        return view('userNew.singleUser.pages.individual.applied', get_defined_vars());
    }

    public function individual_apply_now($id)
    {
        $applicant_id = auth()->user()->id;
        if ($checkService = Application::where('job_id', $id)->first()) {
            return redirect()->back()->with('message', 'Updated');
        }
        $applyForJob = new Application();
        $applyForJob->applicant_id = $applicant_id;
        $applyForJob->job_id = $id;
        $applyForJob->save();

        return back();
    }

    public function individual_saveForLater($id)
    {
        $user_id = auth()->user()->id;
        if ($checkService = SaveForLater::where('job_id', $id)->first()) {
            return redirect()->back()->with('message', 'Updated');
        }
        $saveForLater = new SaveForLater();
        $saveForLater->user_id = $user_id;
        $saveForLater->job_id = $id;
        $saveForLater->save();

        return back();
    }

    // Company
    public function individual_companyDetails($id)
    {
        $title = 'Company Detail';
        $company = User::where('id', $id)->first();
        $otherJobs = User::where('role', 'company')->with('jobs')->get();
        return view('userNew.singleUser.pages.individual.companyDetails', get_defined_vars());
    }
}
