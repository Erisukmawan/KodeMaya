<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function view_dashboard()
    {
        return view('mentor.menu.dashboard');
    }
}
