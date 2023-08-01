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
    public function view_pembayaran_tambah()
    {
        return view('mentor.menu.tambah-pembayaran');
    }
    public function view_nego()
    {
        return view('mentor.menu.nego-kontrak');
    }
    public function view_penyerahan()
    {
        return view('mentor.menu.penyerahan-pesanan');
    }
    public function view_tambahkontrak()
    {
        return view('mentor.menu.tambah-kontrak');
    }
}
