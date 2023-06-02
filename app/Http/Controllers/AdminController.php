<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_dashboard()
    {
        return view('admin.dashboard');
    }

    public function view_manage_users()
    {
        return view('admin.users');
    }
}
