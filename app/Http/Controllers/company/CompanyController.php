<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function copmanyDashboard(){
        $user = Auth::user();
        $title = 'Company dashboard'; 
        return view('user.singleUser.pages.company.dashboard', get_defined_vars());
        
    }

    public function allFreelancer(){
        $title = 'All freelancers'; 
        $freelancers = User::where('role', 'freelancer')->where('status', 1)->get();
        return view('user.singleUser.pages.company.freelancer', get_defined_vars());
    }
}
