<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
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
    public function changeStatus($status, $id)
    {
        $order = User::where('id', $id)->first();
        $order->status = $status;
        $order->update();
        return redirect()->back();
    }
}
