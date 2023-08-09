<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function get_pemesanan(string $id_pemesanan)
    {
        $list_pesanan = Pemesanan::where('id_pemesanan', $id_pemesanan)
            ->leftJoin('pelanggan', function ($join) {
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
            })->first([
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

    public function get_list_pesanan()
    {
        $list_pesanan = Pemesanan::leftJoin('pelanggan', function ($join) {
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

    public function get_list_review()
    {
        $list_pesanan = Pemesanan::where('pemesanan.status_pesanan', 'DIPERIKSA')
            ->leftJoin('pelanggan', function ($join) {
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
            'total_pemesanan' => $list_pesanan->count(),
            'pemesanan_selesai' => Pemesanan::where('status_pesanan', 'SELESAI')->count(),
            'pemesanan_diproses' => Pemesanan::where('status_pesanan', 'DIPROSES')->count(),
            'pemesanan_menunggu' => Pemesanan::where('status_pesanan', 'MENUNGGU')->count(),
            'list_pesanan' => $list_pesanan->get()
        );

        return view('admin.menu.dashboard')->with($data);
    }

    // Users Management
    public function view_manage_users()
    {
        $users = DB::table('users')->get();
        return view('admin.menu.users', ['data' => $users]);
    }

    public function get_user(Request $request)
    {
        $method = $request->method();
        if ($method == 'GET') {
            $row = DB::table('users')->get()->where('user_id', $request->query('id'))->first();

            return $row;
        } else {
            return redirect()->back();
        }
    }

    public function update_user(Request $request)
    {
        DB::table('users')
            ->where('user_id', $request->get('user_id'))
            ->update([
                'user_type' => $request->get('user_type'),
                'user_status' => $request->get('user_status'),
            ]);
        return redirect()->back();
    }

    // Global Parameter
    public function view_manage_global()
    {
        $global_params = DB::table('global_parameter')->get();
        return view('admin.menu.parameter.global', ['data' => $global_params]);
    }

    public function get_global(Request $request)
    {
        $method = $request->method();
        if ($method == 'GET') {
            $row_gparam = DB::table('global_parameter')->get()->where('id', $request->query('id'))->first();

            return $row_gparam;
        } else {
            return redirect()->back();
        }
    }

    public function add_global(Request $request)
    {
        DB::table('global_parameter')->insert([
            'name' => $request->get('parameter_name'),
            'code' => $request->get('parameter_code'),
            'parameter_type' => $request->get('parameter_type'),
            'description' => $request->get('parameter_description'),
            'value_integer' => $request->get('value_integer'),
            'value_string' => $request->get('value_string'),
            'value_datetime' => $request->get('value_datetime'),
            'value_double' => $request->get('value_double')
        ]);
        return redirect()->back();
    }

    public function update_global(Request $request)
    {
        DB::table('global_parameter')
            ->where('id', $request->get('parameter_id'))
            ->update([
                'name' => $request->get('parameter_name'),
                'code' => $request->get('parameter_code'),
                'parameter_type' => $request->get('parameter_type'),
                'description' => $request->get('parameter_description'),
                'value_integer' => $request->get('value_integer'),
                'value_string' => $request->get('value_string'),
                'value_datetime' => $request->get('value_datetime'),
                'value_double' => $request->get('value_double')
            ]);
        return redirect()->back();
    }

    public function delete_global(Request $request)
    {
        DB::table('global_parameter')
            ->where('id', $request->get('parameter_id'))
            ->delete();
        return redirect()->back();
    }

    public function view_manage_enum()
    {
        $enums = DB::table('enum')->get();
        return view('admin.menu.parameter.enum', ['data' => $enums]);
    }

    public function view_profile()
    {
        return view('admin.profile');
    }
    public function view_review()
    {
        $pemesanan = $this->get_list_review();

        $data = array(
            'pemesanan_review' => $pemesanan->get()
        );

        return view('admin.menu.review')->with($data);
    }
    public function view_detail_review(Request $request)
    {
        $id = $request->get('id');
        $pemesanan = $this->get_pemesanan($id);

        if (!$pemesanan) {
            return redirect()->route('gakada');
        }

        $data = array(
            'pesanan' => $pemesanan
        );

        return view('admin.menu.detail-pemesanan')->with($data);
    }
    public function process_review(Request $request)
    {
        DB::beginTransaction();
        try {
            $id = $request->route('id');
            $pemesanan = $this->get_pemesanan($id);

            if (!$pemesanan) {
                return redirect()->route('gakada');
            }

            $pemesanan->status_pesanan = 'SELESAI';
            $pemesanan->save();
            DB::commit();
            return redirect()->route('admin.menu.review')->withSuccess('I||Berhasil Dikirim||Pesanan telah dikirim ke pelanggan.');
            >withSuccess("Berhasil diambil||Silahkan cek menu negosiasi.");
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->route('admin.menu.detail-pemesanan', ['id'=>$id])->withErrors(['message' => "P||Gagal  Dikirim||".$e->getMessage()]);
        }
    }
}
