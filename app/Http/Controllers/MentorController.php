<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function view_dashboard()
    {
        return view('mentor.menu.dashboard');
    }
    public function view_profile()
    {
        return view('mentor.profile');
    }
    public function view_pemesanan()
    {
        return view('mentor.menu.pemesanan');
    }
    public function view_pengerjaan_pemesanan()
    {
        return view('mentor.menu.pengerjaan');
    }
    public function view_detail_pemesanan()
    {
        return view('mentor.menu.detail-pemesanan');
    }
    public function view_pembayaran()
    {
        return view('mentor.menu.pembayaran');
    }
    public function view_pembayaran_preview()
    {
        return view('mentor.menu.preview-pembayaran');
    }
    public function view_kontrak()
    {
        return view('mentor.menu.kontrak');
    }
    public function view_detail_kontrak()
    {
        return view('mentor.menu.detail-kontrak');
    }
    public function view_pembayaran_checkout()
    {
        return view('mentor.menu.checkout');
    }
}
