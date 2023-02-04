<?php

namespace App\Http\Controllers\individual;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class IndividualController extends Controller
{
    public function individual_jobs()
    {
        $title = 'All Job';
        $allJobs = Job::get();

        return view('user.singleUser.pages.individual.viewJobs', get_defined_vars());
    }
    public function individual_appliedJobs()
    {
        $title = 'All Job';
        $allJobs = Job::get();

        return view('user.singleUser.pages.individual.applied', get_defined_vars());
    }
}
