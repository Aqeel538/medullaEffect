<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Job;
use App\Models\Service;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index()
    {
        $title = "Admin-Dashboard";
        $mytime = Carbon::now();
        $admin = User::where('role', 'admin')->first();
        $individual = User::where('role', 'individual')->count();
        $company = User::where('role', 'company')->count();
        $freelancer = User::where('role', 'freelancer')->count();
        $job = Job::count();
        return view('admin.pages.index',  get_defined_vars());
    }

    //Users
    public function users_index()
    {
        $title = "All Users";
        $userLists = User::get();
        $title = "All Users";
        $userLists = User::where('role', 'individual')->get();
        return view('admin.pages.users.index', get_defined_vars());
    }

    public function users_detail(Request $req)
    {
        $title = "User-Detail";
        $obj = User::whereId($req->id)->first();
        return view('admin.pages.users.detail', get_defined_vars());
    }

    //Companies
    public function companies_index()
    {
        $title = "All Companies";
        $users = User::where('role', 'company')->get();
        return view('admin.pages.companies.index', get_defined_vars());
    }

    public function companies_detail(Request $req)
    {
        $title = "Companies-Detail";
        $obj = User::whereId($req->id)->first();
        return view('admin.pages.companies.detail', get_defined_vars());
    }

    //Freelancers
    public function freelancer_index()
    {
        $title = "All-Freelancers";
        $users = User::where('role', 'freelancer')->get();
        return view('admin.pages.freelancers.index', get_defined_vars());
    }

    public function freelancer_detail(Request $req)
    {
        $title = "Freelancers-Detail";
        $obj = User::whereId($req->id)->first();
        return view('admin.pages.freelancers.detail', get_defined_vars());
    }

    // User Tags CRUD
    public function users_tag()
    {
        $title = "Tag-View";
        $tags = Tag::get();
        return view('admin.pages.users.tags',get_defined_vars());
    }

    public function users_tag_edit(Request $request, $id)
    {
        $title = "Tag-Update";
        $tags = Tag::where('id', $id)->first();
        return view('admin.pages.users.editTag', get_defined_vars());
    }

    public function users_tag_editstore(Request $request)
    {
        $user = Tag::where('id', $request->id)->first();
        $user->tag = $request->tag;
        $data = $user->update();
        if ($data) {
            return redirect()->route('users_tag');
        }
    }

    public function users_tag_delete($id)
    {
        $data = Tag::destroy($id);
        if ($data) {
            return redirect()->route('users_tag');
        }
    }


    public function users_tag_form()
    {
        $title = "Tag-Create";
        return view('admin.pages.users.tagsForm', get_defined_vars());
    }

    public function users_tag_store(Request $request)
    {
        $user = new Tag();
        $user->tag = $request->tag;
        $data = $user->save();
        if ($data) {
            return redirect()->back();
        }
    }

    // Category CRUD
    public function users_category()
    {
        $title = "Category-View";
        $categories = Category::get();
        return view('admin.pages.users.category.category', get_defined_vars());
    }
    public function users_category_form()
    {
        $title = "Category-Create";
        return view('admin.pages.users.category.categoryForm', get_defined_vars());
    }

    public function users_category_store(Request $request)
    {
        $user = new Category();
        $user->category = $request->category;
        $data = $user->save();
        if ($data) {
            return redirect()->back();
        }
    }

    public function users_category_edit(Request $request, $id)
    {
        $title = "Category-View";
        $category = Category::where('id', $id)->first();
        return view('admin.pages.users.category.editCategory',  get_defined_vars());
    }
    public function users_category_editstore(Request $request)
    {
        $user = Category::where('id', $request->id)->first();
        $user->category = $request->category;
        $data = $user->update();
        if ($data) {
            return redirect()->route('users_category');
        }
    }
    public function users_category_delete($id)
    {
        $data = Category::destroy($id);
        if ($data) {
            return redirect()->route('users_category');
        }
    }


    // Service CRUD
    public function services()
    {
        $title = "Service-View";
        $services = Service::with('Categories', 'Users')->get();
       
        return view('admin.pages.users.services.services', get_defined_vars());
    }
    public function service_form()
    {
        $title = "Service-Create";
        $categories = Category::get();
        $users = User::get();
        return view('admin.pages.users.services.serviceForm', get_defined_vars());
    }
    public function service_store(Request $request)
    {
        $user = new Service();
        $user->user_id = $request->user_id;
        $user->	category_id = $request->category_id;
        $user->title = $request->title;
        $user->discription = $request->discription;

        if ($request->image) {
            $serviceImageName = $request->file('image')->getClientOriginalName();
            $serviceImage = $request->file('image');
            $serviceImage = rand(0, 9999) . time() . '.' . $request->image->extension();
            $request->file('image')->move(public_path('uploads/ServiceImages'), $serviceImage);
            $user->image = $serviceImage;
        }

        $data = $user->save();
        if ($data) {
            return redirect()->back();
        }
    }
    public function service_edit(Request $request, $id)
    {
        $title = "Service-Update";
        $users = User::get();
        $categories = Category::get();
        $service = Service::where('id', $id)->first();
        return view('admin.pages.users.services.editServices', get_defined_vars());
    }

    public function service_editstore(Request $request)
    {
        
        $user = Service::where('id', $request->id)->first();
        $user->user_id = $request->user_id;
        $user->category_id = $request->category_id;
        $user->title = $request->title;
        $user->discription = $request->discription;
        if ($request->image) {
            $serviceImageName = $request->file('image')->getClientOriginalName();
            $serviceImage = $request->file('image');
            $serviceImage = rand(0, 9999) . time() . '.' . $request->image->extension();
            $request->file('image')->move(public_path('uploads/ServiceImages'), $serviceImage);
            $user->image = $serviceImage;
        }
        $data = $user->update();
        if ($data) {
            return redirect()->route('services');
        }
    }
    public function service_delete($id)
    {
        $data = Service::destroy($id);
        if ($data) {
            return redirect()->route('services');
        }
    }

    // Jobs CRUD
    public function jobs()
    {
        $title = "Job-View";
        $jobs = Job::with('Categories', 'Users')->get();
        return view('admin.pages.users.jobs.jobs', get_defined_vars());
    }
    public function jobs_form()
    {
        $title = "Job-Create";
        $categories = Category::get();
        $users = User::get();
        return view('admin.pages.users.jobs.jobForm', get_defined_vars());
    }
    public function jobs_store(Request $request)
    {
        $user = new Job();
        $user->user_id = $request->user_id;
        $user->	category_id = $request->category_id;
        $user->title = $request->title;
        $user->discription = $request->discription;

        if ($request->image) {
            $jobImageName = $request->file('image')->getClientOriginalName();
            $jobImage = $request->file('image');
            $jobImage = rand(0, 9999) . time() . '.' . $request->image->extension();
            $request->file('image')->move(public_path('uploads/ServiceImages'), $jobImage);
            $user->image = $jobImage;
        }

        $data = $user->save();
        if ($data) {
            return redirect()->back();
        }
    }
    public function jobs_edit(Request $request, $id)
    {
        $title = "Job-Update";
        $users = User::get();
        $categories = Category::get();
        $jobs = Job::where('id', $id)->first();
        return view('admin.pages.users.jobs.editjob', get_defined_vars());
    }
    public function jobs_editstore(Request $request)
    {
        $user = Job::where('id', $request->id)->first();
        $user->user_id = $request->user_id;
        $user->category_id = $request->category_id;
        $user->title = $request->title;
        $user->discription = $request->discription;
        if ($request->image) {
            $jobImageName = $request->file('image')->getClientOriginalName();
            $jobImage = $request->file('image');
            $jobImage = rand(0, 9999) . time() . '.' . $request->image->extension();
            $request->file('image')->move(public_path('uploads/ServiceImages'), $jobImage);
            $user->image = $jobImage;
        }
        $data = $user->update();
        if ($data) {
            return redirect()->route('jobs');
        }
    }

    public function job_delete($id)
    {
        $data = Job::destroy($id);
        if ($data) {
            return redirect()->route('jobs');
        }
    }


    // All User Seen
    public function individual_user()
    {
        $title = "Individual-User";
        $user = User::where('role', 'individual')->get();
        return view('admin.pages.users.userseen.individual',  get_defined_vars());
    }





    
    public function changeStatus($status, $id)
    {
        $order = User::where('id', $id)->first();
        $order->status = $status;
        $order->update();
        return redirect()->back();
    }
}
