<?php

namespace App\Http\Controllers;

use App\Models\Kontrak;
use App\Models\Mentor;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MentorController extends Controller
{
    public function get_kontrak(string $id_kontrak)
    {
        $kontrak = Kontrak::where('id_kontrak', $id_kontrak)
            ->leftJoin('pelanggan', function ($join) {
                $join->on('pelanggan.id_pelanggan', '=', 'kontrak.id_pelanggan');
            })
            ->leftJoin('mentor', function ($join) {
                $join->on('mentor.id_mentor', '=', 'kontrak.id_mentor');
            })->first([
                'kontrak.*',
                'pelanggan.nama as nama_pelanggan',
                'pelanggan.foto_profil as foto_profil_pelanggan',
                'mentor.nama as nama_mentor',
                'mentor.foto_profil as foto_profil_mentor'
            ]);

        return $kontrak;
    }

    public function get_pemesanan(string $id_pemesanan)
    {
        $pemesanan = Pemesanan::where('id_pemesanan', $id_pemesanan)
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
                'mentor.nama as nama_mentor',
                'mentor.foto_profil as foto_profil_mentor',
                'kontrak.waktu_kontrak',
                'kontrak.tenggat_waktu',
                'kontrak.status_kontrak',
            ]);

        return $pemesanan;
    }

    public function get_pemesanan_by_mentor(string $id_mentor)
    {
        $pemesanan = Pemesanan::where([
            ['pemesanan.id_mentor', $id_mentor]
            ])
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
                'mentor.nama as nama_mentor',
                'mentor.status_mentor',
                'mentor.foto_profil as foto_profil_mentor',
                'kontrak.waktu_kontrak',
                'kontrak.tenggat_waktu',
                'kontrak.status_kontrak',
            ]);

        return $pemesanan;
    }

    public function get_pemesanan_by_status(string $status_pesanan)
    {
        $pemesanan = Pemesanan::where('pemesanan.status_pesanan', $status_pesanan)
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
                'mentor.nama as nama_mentor',
                'mentor.status_mentor',
                'mentor.foto_profil as foto_profil_mentor',
                'kontrak.waktu_kontrak',
                'kontrak.tenggat_waktu',
                'kontrak.status_kontrak',
            ]);

        return $pemesanan;
    }

    public function view_dashboard()
    {
        $user = Auth::guard('webmentor')->user();

        $pemesanan = $this->get_pemesanan_by_mentor($user->id_mentor);
        $total_projek = $pemesanan
            ->count();
        $projek_diproses = Pemesanan::where([
            ['id_mentor', '=', $user->id_mentor],
            ['status_pesanan', '=', 'DIPROSES']
        ])
            ->count();
        $projek_selesai = Pemesanan::where([
            ['id_mentor', '=', $user->id_mentor],
            ['status_pesanan', '=', 'SELESAI']
        ])
            ->count();

        $data = array(
            'pemesanan' => $pemesanan->get(),
            'total_projek' => $total_projek,
            'projek_diproses' => $projek_diproses,
            'projek_selesai' => $projek_selesai,
        );

        return view('mentor.menu.dashboard')->with($data);
    }
    public function view_profile()
    {
        return view('mentor.profile');
    }
    public function view_pemesanan()
    {
        $user = Auth::guard('webmentor')->user();

        $pemesanan_mentor_list = $this->get_pemesanan_by_mentor($user->id_mentor)->get();
        $pemesanan_mentor = $this->get_pemesanan_by_mentor($user->id_mentor)->first();
        $pemesanan = $this->get_pemesanan_by_status('MENUNGGU');
        $data = array(
            'pemesanan_mentor_list' => $pemesanan_mentor_list,
            'pemesanan_mentor' => $pemesanan_mentor,
            'pemesanan' => $pemesanan->get(),
            'total_pemesanan' => $pemesanan->count(),
        );
        return view('mentor.menu.pemesanan')->with($data);
    }
    public function view_pengerjaan_pemesanan()
    {
        return view('mentor.menu.pengerjaan');
    }
    public function view_detail_pemesanan(Request $request)
    {
        $id = $request->route('id');
        $pemesanan = $this->get_pemesanan($id);
        $data = array('pemesanan' => $pemesanan);

        return view('mentor.menu.detail-pemesanan')->with($data);
    }
    public function ambil_pemesanan(Request $request)
    {
        DB::beginTransaction();
        try {
            $user = Auth::guard('webmentor')->user();
            $id = $request->route('id');

            $pemesanan = Pemesanan::where('id_pemesanan', $id)->first();
            $pemesanan->id_mentor = $user->id_mentor;
            $pemesanan->status_pesanan = "DIPROSES";
            $pemesanan->save();
            $mentor = Mentor::find($user->id_mentor);
            $mentor->status_mentor = 'SIBUK';
            $mentor->save();
            DB::commit();
            return redirect()->route('mentor.menu.pemesanan')
                ->withSuccess("Pemesanan #$pemesanan->id_pemesanan berhasil diambil! Silahkan cek menu negosiasi.");
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->route('mentor.menu.pemesanan')->withErrors(['message' => $e->getMessage()]);
        }
    }

    public function detail_pemesanan(Request $request)
    {
        $id = $request->get('id');
        $pemesanan = $this->get_pemesanan($id);

        return $pemesanan;
    }

    public function kirim_pesan(Request $request)
    {
        $order_id = $request->get('order_id');
        $type = $request->get('type');
        $content = $request->get('content');
        $user = Auth::guard('webmentor')->user();

        $date = mentorSendMessage($user, $order_id, $content, $type);

        return $date;
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
    public function view_tambahkontrak(Request $request)
    {
        $id = $request->route('id');
        $pemesanan = $this->get_pemesanan($id);
        $data = array('pemesanan' => $pemesanan);

        return view('mentor.menu.tambah-kontrak')->with($data);
    }
    public function view_detailkontrak(Request $request)
    {
        $id = $request->route('id');
        $kontrak = $this->get_kontrak($id);
        $data = array('kontrak' => $kontrak);

        return view('mentor.menu.detail-kontrak')->with($data);
    }
    public function create_kontrak(Request $request)
    {
        try {
            $request->validate([
                'id_pemesanan' => 'required|string',
                'nama_projek' => 'required|string',
                'deskripsi_projek' => 'required|string',
                'waktu_kontrak' => 'required|date',
                'tenggat_waktu' => 'required|date',
                'total_harga' => 'required|integer',
            ]);

            $user = Auth::guard('webmentor')->user();
            $pemesanan = Pemesanan::where('id_pemesanan', $request->get('id_pemesanan'))->first();
            $id_pelanggan = $pemesanan->id_pelanggan;

            
            $kontrak = Kontrak::create([
                'id_pelanggan' => $id_pelanggan,
                'id_mentor' => $user->id_mentor,
                'nama_projek' => $request->get('nama_projek'),
                'deskripsi_projek' => $request->get('deskripsi_projek'),
                'waktu_kontrak' => $request->get('waktu_kontrak'),
                'tenggat_waktu' => $request->get('tenggat_waktu'),
                'total_harga' => $request->get('total_harga'),
            ]);
            
            $pemesanan->id_kontrak = $kontrak->id_kontrak;
            $pemesanan->save();

            DB::commit();
            return redirect()->route('mentor.menu.pemesanan')
                ->withSuccess("Kontrak #$kontrak->id_kontrak berhasil dibuat!");
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->route('mentor.menu.pemesanan.tambah-kontrak', ['id' => $request->get('id_pemesanan')])->withErrors(['message' => $e->getMessage()]);
        }
    }
}
