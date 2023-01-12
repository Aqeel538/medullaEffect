<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Job;
use App\Models\Service;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }

    //Users
    public function users_index()
    {
        $userLists = User::get();
        return view('admin.pages.users.index', get_defined_vars());
    }

    public function users_detail(Request $req)
    {

        $obj = User::whereId($req->id)->first();

        return view('admin.pages.users.detail', get_defined_vars());
    }

    // User Tags CRUD
    public function users_tag()
    {
        $tags = Tag::get();
        return view('admin.pages.users.tags', compact('tags'));
    }

    public function users_tag_edit(Request $request, $id)
    {
        $tags = Tag::where('id', $id)->first();
        return view('admin.pages.users.editTag', compact('tags'));
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
        return view('admin.pages.users.tagsForm');
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
        $categories = Category::get();
        return view('admin.pages.users.category.category', compact('categories'));
    }
    public function users_category_form()
    {
        return view('admin.pages.users.category.categoryForm');
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
        $category = Category::where('id', $id)->first();
        return view('admin.pages.users.category.editCategory', compact('category'));
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
        $services = Service::with('Categories', 'Users')->get();
       
        return view('admin.pages.users.services.services', get_defined_vars());
    }
    public function service_form()
    {
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
        $jobs = Job::with('Categories', 'Users')->get();
        return view('admin.pages.users.jobs.jobs', get_defined_vars());
    }
    public function jobs_form()
    {
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







    public function changeStatus($status, $id)
    {
        $order = User::where('id', $id)->first();
        $order->status = $status;
        $order->update();
        return redirect()->back();
    }
}
