<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $users = User::count();
        $sites = Site::count();
        $admins = Admin::count();
        return view('welcome', compact('users', 'sites', 'admins'));

    }
}
