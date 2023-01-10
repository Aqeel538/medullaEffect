<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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
        // dd($id);
        $tags = Tag::where('id', $id)->first();
        return view('admin.pages.users.editTag', compact('tags'));
    }

    public function users_tag_editstore(Request $request)
    {
        // dd($request->id);
        $user = Tag::where('id', $request->id)->first();
        // dd($user);
        $user->tag = $request->tag;
        $data = $user->update();
        if ($data) {
            return redirect()->route('users_tag');
        }
    }

    public function users_tag_delete(Request $id)
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


    public function changeStatus($status, $id)
    {
        $order = User::where('id', $id)->first();
        $order->status = $status;
        $order->update();
        return redirect()->back();
    }
}
