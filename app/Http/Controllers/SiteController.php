<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::count();
        $sites = Site::count();
        $admins = Admin::count();
        $site= site ::all();
        return view('indexsite', compact('users', 'sites', 'admins','site'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::count();
        $sites = Site::count();
        $admins = Admin::count();
        $site= site ::all();
        return view("addsite",compact('users','sites','admins','site'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Site::create($request->all());
        $users = User::count();
        $sites = Site::count();
        $admins = Admin::count();
        $site= site ::all();
        return view("indexsite",compact('site','users','sites','admins'));
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Site $site)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $users = User::count();
        $admins = Admin::count();
            $sitess =  Site::find($id)->delete();
            $site= site ::all();
            $sites = Site::count();
            return view("indexsite",compact('users','sites','admins','site','sitess'));
    }
}
