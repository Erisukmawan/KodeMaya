<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function view_dashboard()
    {
        return view('customer.menu.dashboard');
    }
}
