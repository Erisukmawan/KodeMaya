<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function view_dashboard()
    {
        return view('mentor.menu.dashboard');
    }
    public function view_tulung_pesanan()
    {
        return view('mentor.features.tulung.pesanan');
    }
    public function view_profile()
    {
        return view('mentor.profile');
    }
}
