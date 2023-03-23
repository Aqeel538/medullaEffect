<?php

namespace App\Http\Controllers\individual;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\DismissNotification;
use App\Models\Follower;
use App\Models\Job;
use App\Models\Notification;
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
        $jobsApplied = Application::where('applicant_id', auth()->user()->id)->count();
        // dd($jobsApplied);
        return view('userNew.singleUser.pages.individual.profile', get_defined_vars());
    }

    public function individual_jobs()
    {
        // public function individual_jobs($industry = null , $localtion = null)
        $title = 'All Job';
        $user_id = auth()->user()->id;
        // $allJobs = User::where('role', 'company')->with('jobs')->get('id');
        $allJobs = Job::with('users', 'applied_jobs', 'saved_jobs')->get();
        // if($industry != null){
        //     $allJobs->where()
        // }
        // if($localtion != null){
        //     $allJobs->where()
        // }
        // dd($allJobs[0]->applied_jobs);

        $freelancers = User::where('role', 'freelancer')->where('status', 1)->get();
        // $industryOption = $freelancers;
        $industryOption = Job::with('users')->get();

        $savedJobs = SaveForLater::where('user_id', $user_id)->with('savedJobs')->get();

        $applied = Application::where('applicant_id', $user_id)->get();
        // dd($applied[0]->job_id);
        return view('userNew.singleUser.pages.individual.tagline', get_defined_vars());
    }
    public function individual_jobs_search(Request $request)
    {
        $title = 'All Freelancers';
        $user_id = auth()->user()->id;
        // $industryOption = User::where('role', 'company')->get();
        $industryOption = Job::with('users')->get();
        // dd($industryOption[1]->users->industry);
        $savedJobs = SaveForLater::where('user_id', $user_id)->with('savedJobs')->get();

        if ($request->searchLocation) {
            if ($request->industry) {
                $allJobs = Job::where('located_in', $request->searchLocation)->where('industry', $request->industry)->with('users', 'applied_jobs')->get();
                // $allJobs = User::where('role', 'company')->where('located_in', $request->searchLocation)->where('industry', $request->industry)->with('jobs')->get('id');

                return view('userNew.singleUser.pages.individual.tagline', get_defined_vars());
            } else {
                // $allJobs = User::where('role', 'company')->where('located_in', $request->searchLocation)->with('jobs')->get('id');
                $allJobs = Job::where('located_in', $request->searchLocation)->with('users', 'applied_jobs')->get();

                return view('userNew.singleUser.pages.individual.tagline', get_defined_vars());
            }
        }
        // else {
        //     $message = 'Search not found!';
        //     $matchSearch = 1;
        //     return view('userNew.singleUser.pages.individual.tagline', get_defined_vars());
        // }

        if ($request->industry) {
            // $allJobs = User::where('role', 'company')->where('industry', $request->industry)->with('jobs')->get('id');
            $allJobs = Job::where('industry', $request->industry)->with('users', 'applied_jobs')->get();

            return view('userNew.singleUser.pages.individual.tagline', get_defined_vars());
        }

        // $allJobs = User::where('role', 'company')->with('jobs')->get('id');
        $allJobs = Job::with('users', 'applied_jobs')->get();
        return view('userNew.singleUser.pages.individual.tagline', get_defined_vars());
    }

    public function individual_advanceSearchFilter()
    {
        $title = 'Advance search filter';

        // $allJobs = User::where('role', 'company')->with('jobs')->get('id');
        $allJobs = Job::with('users', 'applied_jobs', 'saved_jobs')->get();

        $freelancers = User::where('role', 'freelancer')->where('status', 1)->get();
        $industryOption = $freelancers;
        return view('userNew.singleUser.pages.individual.advanceFillter', get_defined_vars());
    }

    public function individual_jobs_advanceSearch(Request $request)
    {

        $title = 'All Jobs';
        $location = $request->input('searchLocation');
        $industry = $request->input('industry');
        $experience = $request->input('experience');
        $job_type = $request->input('job_type');
        $date_posted = $request->input('created_at');
        $pay_range = $request->input('pay_range');
        $query = Job::query();
        if ($location) {
            // $query->where('located_in', 'like', '%' . $location . '%')->with('jobs')->get('id');
            $query->where('located_in', 'like', '%' . $location . '%')->get('id');
        }
        if ($industry) {
            $query->where('industry', $industry)->get('id');
        }
        if ($experience) {
            $query->where('experience', $experience)->get('id');
        }
        if ($job_type) {
            $query->where('job_type', $job_type)->get('id');
        }
        if ($date_posted) {
            $query->whereDate('created_at', $date_posted)->get('id');
        }
        if ($pay_range) {
            $query->where('rate', $pay_range)->get('id');
        }
        $allJobs = $query->get();

        return view('userNew.singleUser.pages.individual.advanceFillter', get_defined_vars());
    }

    public function individual_jodDetails($id)
    {
        $title = 'Job Detail';
        $jobDetail = Job::where('id', $id)->with('Users.followers')->first();
        // dd($jobDetail->Users->followers[0]);
        $otherJobs = User::where('role', 'company')->with('jobs')->get();
        // $createdAt = $otherJobs[2]->jobs[0]->created_at->diffForHumans();

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
        $checkService = Application::where('job_id', $id)->where('applicant_id', $applicant_id)->first();
        if ($checkService) {

            return redirect()->back()->with('message', 'Updated');
        } else {

            $applyForJob = new Application();
            $applyForJob->applicant_id = $applicant_id;
            $applyForJob->job_id = $id;
            $applyForJob->save();
            return back();
        }
    }

    public function individual_saveForLater($id)
    {
        // dd($id);
        $user_id = auth()->user()->id;
        $checkUser = SaveForLater::where('user_id', $user_id)->where('job_id', $id)->first();
        // dd($checkUser);
        if (isset($checkUser) && !empty($checkUser)) {


            return redirect()->back()->with('message', 'Updated');
        } else {

            $saveForLater = new SaveForLater();
            $saveForLater->user_id = $user_id;
            $saveForLater->job_id = $id;
            $saveForLater->save();
        }


        return back();
    }

    // Company
    public function individual_companyDetails($id)
    {
        $title = 'Company Detail';
        $company = User::where('id', $id)->first();
        $otherJobs = User::where('role', 'company')->with('jobs', 'companyJobs')->get();
        // dd($otherJobs[3]->companyJobs);
        return view('userNew.singleUser.pages.individual.companyDetails', get_defined_vars());
    }

    public function follow_company($id)
    {
        // dd($id);
        $user_id = auth()->user()->id;
        $checkUser = Follower::where('user_id', $user_id)->where('company_id', $id)->first();
        // dd($checkUser);
        if (isset($checkUser) && !empty($checkUser)) {

            $unfollow = Follower::destroy($checkUser->id);
            return redirect()->back()->with('message', 'Updated');
        } else {

            $followCompany = new Follower();
            $followCompany->user_id = $user_id;
            $followCompany->company_id = $id;
            $followCompany->save();
        }


        return back();
    }

    // Notification
    public function individual_notifications()
    {
        $title = 'Individual|Notifications';
        $followedCompanies = User::where('id', auth()->user()->id)->with('followingCompanies.companyNotifications.dismissNotification')->first();

        $allNotification = [];
        // $countNotification = $allNotification[]->count;
        foreach ($followedCompanies['followingCompanies'] as $followedCompany) {

            foreach ($followedCompany['companyNotifications'] as $notifications) {

                if ($notifications['dismissNotification']->where('user_id', auth()->user()->id)->first()) {
                } else {
                    $allNotification[] = $notifications;
                }
                // }

            }
        }
        $countNotification = count($allNotification);
        // dd($countNotification);
        // $followedCompany = $
        // dd($followedCompanys[0]->followingCompanies);

        // foreach ($followedCompanies['followingCompanies'] as $followedCompany) {
        //     // dd($followedCompany);
        //     foreach ($followedCompany['companyNotifications'] as $notifications) {
        //         // if (isset($notifications['dismissNotification'])) {

        //         // }
        //         // else {
        //         if ($notifications['dismissNotification']->where('user_id', 29)->first()) {
        //             echo "dismissed";
        //         } else {
        //             echo $notifications;
        //         }
        //         // }

        //     }
        // }




        return view('userNew.singleUser.pages.individual.notifications', get_defined_vars());
    }

    // RESUME
    public function individual_resume()
    {
        $id = auth()->user()->id;
        $title = 'Applicant Resume';
        $resume = User::where('id', $id)->first();
        $applicant = Application::where('applicant_id', $id)->with('users')->first();
        // dd($applicant);
        return view('userNew.singleUser.pages.individual.resume', get_defined_vars());
    }
}
