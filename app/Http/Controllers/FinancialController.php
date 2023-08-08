<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class FinancialController extends Controller
{
    public function get_list_pesanan()
    {
        $list_pesanan = Pemesanan::
            leftJoin('pelanggan', function ($join) {
                $join->on('pelanggan.id_pelanggan', '=', 'pemesanan.id_pelanggan');
            })
            ->leftJoin('mentor', function ($join) {
                $join->on('mentor.id_mentor', '=', 'pemesanan.id_mentor');
            })
            ->leftJoin('kontrak', function ($join) {
                $join->on('kontrak.id_kontrak', '=', 'pemesanan.id_kontrak');
            })
            ->leftJoin('pegawai', function ($join) {
                $join->on('pegawai.id_pegawai', '=', 'pemesanan.id_pegawai');
            })->select([
                'pemesanan.*',
                'pelanggan.nama as nama_pelanggan',
                'pelanggan.foto_profil as foto_profil_pelanggan',
                'pelanggan.email as email_pelanggan',
                'pelanggan.telp as telp_pelanggan',
                'mentor.nama as nama_mentor',
                'mentor.foto_profil as foto_profil_mentor',
                'kontrak.waktu_kontrak',
                'kontrak.tenggat_waktu',
                'kontrak.status_kontrak',
                'kontrak.total_harga',
            ]);
        return $list_pesanan;
    }
    
    public function view_dashboard()
    {
        $list_pesanan = $this->get_list_pesanan();

        $data = array(
            'total_pembayaran' => $list_pesanan->count(),
            'total_sudah_bayar' => Pemesanan::where('status_pembayaran', 'TERBAYAR')->count(),
            'total_belum_bayar' => Pemesanan::where('status_pembayaran', 'BELUM BAYAR')->count(),
            'total_keuangan' => Pemesanan::where('status_pembayaran', 'TERBAYAR')->leftJoin('kontrak', function ($join) {
                $join->on('kontrak.id_kontrak', '=', 'pemesanan.id_kontrak');
            })->sum('total_harga'),
            'list_pesanan' => $list_pesanan->get()
        );

        return view('financial.menu.dashboard')->with($data);
    }
    public function view_profile()
    {
        return view('financial.profile');
    }
    public function view_rekap()
    {
        $list_pesanan = $this->get_list_pesanan();

        $data = array(
            'list_pesanan' => $list_pesanan->get()
        );

        return view('financial.menu.rekap')->with($data);
    }
}
