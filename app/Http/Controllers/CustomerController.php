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
    public function view_pemesanan()
    {
        return view('customer.menu.pemesanan');
    }
    public function view_form_pemesanan()
    {
        return view('customer.menu.form-pemesanan');
    }
    public function view_pembayaran()
    {
        return view('customer.menu.pembayaran');
    }
    public function view_pembayaran_preview()
    {
        return view('customer.menu.preview-pembayaran');
    }
}
