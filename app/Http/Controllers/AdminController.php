<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::count();
        $sites = Site::count();
        $admins = Admin::count();
        $admin= Admin ::all();
        return view("indexadmin",compact('admin','users','sites','admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::count();
        $sites = Site::count();
        $admins = Admin::count();
        return view("addadmin",compact('users','sites','admins'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Admin::create($request->all());
        $users = User::count();
        $sites = Site::count();
        $admins = Admin::count();
        $admin= Admin ::all();
        return view("indexadmin",compact('admin','users','sites','admins'));
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = User::count();
        $sites = Site::count();
        $admins = Admin::count();
        $admin= Admin::find($id);
        return view('editadmin',compact('admins','users','sites','admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $users = User::count();
        $sites = Site::count();
        $admins = Admin::count();
        $adminss= Admin::find($request->id);
         $adminss->update($request->except(['_token']));
         $admin= Admin ::all();
        return view("indexadmin",compact('admin','users','sites','admins'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $users = User::count();
        $sites = Site::count();
            $adminss =  Admin::find($id);
            $adminss->delete();
            $admins = Admin::count();
            $admin= Admin ::all();
            return view("indexadmin",compact('users','sites','admins','admin'));

    }
}
