<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinancialController extends Controller
{
    public function view_dashboard()
    {
        return view('financial.menu.dashboard');
    }
    public function view_profile()
    {
        return view('financial.profile');
    }
    public function view_review()
    {
        return view('financial.menu.review');
    }
    public function view_detail()
    {
        return view('financial.menu.detail-pemesanan');
    }
}
