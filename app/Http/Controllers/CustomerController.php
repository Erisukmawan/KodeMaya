<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function view_dashboard()
    {
        return view('customer.menu.dashboard');
    }
    public function view_profile()
    {
        return view('customer.profile');
    }
}
