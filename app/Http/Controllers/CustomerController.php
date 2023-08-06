<?php

namespace App\Http\Controllers;

use App\Models\Kontrak;
use App\Models\Mentor;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CustomerController extends Controller
{
    public function list_kontrak(string $id_pelanggan)
    {
        $pemesanan = Kontrak::where('kontrak.id_pelanggan', $id_pelanggan)
            ->whereNotNull('kontrak.id_kontrak')
            ->leftJoin('pelanggan', function ($join) {
                $join->on('pelanggan.id_pelanggan', '=', 'kontrak.id_pelanggan');
            })
            ->leftJoin('mentor', function ($join) {
                $join->on('mentor.id_mentor', '=', 'kontrak.id_mentor');
            })->select([
                'kontrak.*',
                'pelanggan.nama as nama_pelanggan',
                'pelanggan.foto_profil as foto_profil_pelanggan',
                'mentor.nama as nama_mentor',
                'mentor.foto_profil as foto_profil_mentor'
            ]);

        return $pemesanan;
    }

    public function list_pemesanan(string $id_pelanggan)
    {
        $pemesanan = Pemesanan::where('pemesanan.id_pelanggan', $id_pelanggan)
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
                'mentor.foto_profil as foto_profil_mentor',
                'kontrak.waktu_kontrak',
                'kontrak.tenggat_waktu',
                'kontrak.status_kontrak',
            ]);

        return $pemesanan;
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
                'kontrak.total_harga',
            ]);

        return $pemesanan;
    }

    public function view_dashboard()
    {
        $user = Auth::guard('webcustomer')->user();

        $pemesanan = Pemesanan::where('id_pelanggan', '=', $user->id_pelanggan);
        $total_pemesanan = $pemesanan->count();
        $projek_diproses = Pemesanan::where([
            ['id_pelanggan', '=', $user->id_pelanggan],
            ['status_pemesanan', '=', 'DIPROSES']
        ])
            ->count();
        $projek_selesai = Pemesanan::where([
            ['id_pelanggan', '=', $user->id_pelanggan],
            ['status_pemesanan', '=', 'SELESAI']
        ])
            ->count();
        $pesanan_belum_bayar = Pemesanan::where([
            ['id_pelanggan', '=', $user->id_pelanggan],
            ['status_pembayaran', '=', 'BELUM DIBAYAR']
        ])
            ->first();

        $data = array(
            'pemesanan' => $pemesanan,
            'total_pemesanan' => $total_pemesanan,
            'projek_diproses' => $projek_diproses,
            'projek_selesai' => $projek_selesai,
            'pesanan_belum_bayar' => $pesanan_belum_bayar,
        );

        return view('customer.menu.dashboard')->with($data);
    }

    public function view_profile()
    {
        return view('customer.profile');
    }
    public function view_pemesanan()
    {
        $user = Auth::guard('webcustomer')->user();

        $pemesanan = $this->list_pemesanan($user->id_pelanggan)->get();
        $kontrak_list = $this->list_kontrak($user->id_pelanggan)->get();

        $data = array(
            'kontrak_list' => $kontrak_list,
            'pemesanan' => $pemesanan
        );
        return view('customer.menu.pemesanan')->with($data);
    }

    public function view_form_pemesanan()
    {
        return view('customer.menu.form-pemesanan');
    }

    public function create_pemesanan(Request $request)
    {
        try {
            $request->validate([
                'nama_projek' => 'required|string',
                'kategori' => 'required|string',
                'harga' => 'required|integer',
                'deskripsi_projek' => 'required|string',
            ]);

            $user = Auth::guard('webcustomer')->user();

            $pemesanan = Pemesanan::create([
                'id_pelanggan' => $user->id_pelanggan,
                'nama_projek' => $request->get('nama_projek'),
                'kategori' => $request->get('kategori'),
                'harga' => $request->get('harga'),
                'deskripsi_projek' => $request->get('deskripsi_projek'),
            ]);
            DB::commit();
            return redirect()->route('customer.menu.pemesanan')
                ->withSuccess("Pemesanan #$pemesanan->id_pemesanan berhasil dibuat!");
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->route('customer.menu.pemesanan.form_pemesanan')->withErrors(['message' => $e->getMessage()]);
        }
    }


    public function view_detail_pemesanan(Request $request)
    {
        $id = $request->route('id');
        $pemesanan = $this->get_pemesanan($id);
        $data = array('pemesanan' => $pemesanan);

        return view('customer.menu.detail-pemesanan')->with($data);
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
        $user = Auth::guard('webcustomer')->user();

        $date = customerSendMessage($user, $order_id, $content, $type);

        return $date;
    }

    public function view_pembayaran()
    {
        return view('customer.menu.pembayaran');
    }
    public function view_pembayaran_preview()
    {
        return view('customer.menu.preview-pembayaran');
    }
    public function view_kontrak()
    {
        return view('customer.menu.kontrak');
    }
    public function view_pembayaran_checkout()
    {
        $payment_method = getPaymentMethod();
        $data = array('payment_method' => $payment_method);

        return view('customer.menu.checkout')->with($data);
    }
    public function view_nego()
    {
        return view('customer.menu.nego-kontrak');
    }
    public function view_review()
    {
        return view('customer.menu.review-pesanan');
    }
    public function view_detailkontrak(Request $request)
    {
        $id = $request->route('id');
        $pemesanan = $this->get_pemesanan($id);
        $data = array('kontrak' => $pemesanan);

        return view('customer.menu.detail-kontrak')->with($data);
    }
    public function persetujuan_kontrak(Request $request)
    {
        DB::beginTransaction();
        try {
            $status = $request->get('status');
            $id = $request->get('id');
            $kontrak = Kontrak::find($id);
            $pemesanan = Pemesanan::where('id_kontrak', $id)->first();
            if ($status == 'SETUJU') {
                $reference_code = buatTagihanPembayaran(); // Kode Tripay
                $kontrak->status_kontrak = 'SETUJU';
                $kontrak->save();
                $pemesanan->status_pembayaran = 'BELUM DIBAYAR';
                $pemesanan->kode_referensi = $reference_code;
                $pemesanan->save();
                DB::commit();
                return redirect()->route('customer.menu.pemesanan')
                    ->withSuccess("Kontrak #$kontrak->id_kontrak telah disetujui! Silahkan melanjutkan pembayaran.");
            } else {
                $kontrak->status_kontrak = 'TIDAK SETUJU';
                $kontrak->save();
                $pemesanan->status_pemesanan = 'MENUNGGU';
                $pemesanan->id_mentor = NULL;
                $pemesanan->id_kontrak = NULL;
                $pemesanan->save();
                $mentor = Mentor::find($kontrak->id_mentor);
                $mentor->status_mentor = 'TERSEDIA';
                $mentor->save();
                DB::commit();
                return redirect()->route('customer.menu.pemesanan')
                    ->withSuccess("Kontrak #$kontrak->id_kontrak ditolak, status pesanan anda kembali ke waiting list dan tunggu mentor lain mengambil ulang.");
            }
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->route('customer.menu.pemesanan')->withErrors(['message' => $e->getMessage()]);
        }
    }
    public function view_penyerahan()
    {
        return view('customer.menu.penyerahan-pesanan');
    }
}
