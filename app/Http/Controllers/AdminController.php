<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_dashboard()
    {
        return view('admin.menu.dashboard');
    }

    public function view_manage_users()
    {
        return view('admin.menu.users');
    }

    public function view_manage_pricing()
    {
        return view('admin.menu.parameter.pricing');
    }

    public function view_manage_enum()
    {
        return view('admin.menu.parameter.enum');
    }

    public function view_notification()
    {
        return view('admin.menu.notification');
    }

    public function view_income()
    {
        return view('admin.finance.income');
    }

    public function view_disbursement()
    {
        return view('admin.finance.disbursement');
    }

    public function view_transactions()
    {
        return view('admin.finance.transactions');
    }

    public function view_tulung_post()
    {
        return view('admin.features.tulung.post');
    }

    public function view_tulung_task()
    {
        return view('admin.features.tulung.task');
    }

    public function view_tulung_history()
    {
        return view('admin.features.tulung.history');
    }

    public function view_consultation_post()
    {
        return view('admin.features.consultation.post');
    }

    public function view_consultation_task()
    {
        return view('admin.features.consultation.task');
    }

    public function view_consultation_history()
    {
        return view('admin.features.consultation.history');
    }
}
