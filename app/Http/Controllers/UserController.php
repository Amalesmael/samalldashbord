<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::count();
        $sites = Site::count();
        $admins = Admin::count();
        $user= user ::all();
        return view('indexuser', compact('users', 'sites', 'admins','user'));

    }


    public function create()
    {
        $users = User::count();
        $sites = Site::count();
        $admins = Admin::count();
        return view("adduser",compact('users','sites','admins'));
    }

    public function store(Request $request)
    {
        user::create($request->all());
        $users = User::count();
        $sites = Site::count();
        $admins = Admin::count();
        $user= user ::all();
        return view("indexuser",compact('user','users','sites','admins'));
    }

    public function edit($id)
    {
        $users = User::count();
        $sites = Site::count();
        $admins = Admin::count();
        $user= user::find($id);
        return view('edituser',compact('admins','users','sites','user'));
    }


    public function update(Request $request)
    {

        $users = User::count();
        $sites = Site::count();
        $admins = Admin::count();
        $userss= user::find($request->id);
         $userss->update($request->except(['_token']));
         $user= user ::all();
        return view("indexuser",compact('user','users','sites','admins'));
    }


    public function destroy($id)
    {

        $sites = Site::count();
        $admins = Admin::count();
            $userss =  user::find($id);
            $userss->delete();
            $user= user ::all();
            $users = User::count();
            return view("indexuser",compact('users','sites','admins','user'));

    }
}
