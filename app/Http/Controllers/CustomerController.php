<?php

namespace App\Http\Controllers;

use App\Models\Kontrak;
use App\Models\Mentor;
use App\Models\Pemesanan;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CustomerController extends Controller
{
    public function list_kontrak(string $id_pelanggan)
    {
        $kontrak = Kontrak::where('kontrak.id_pelanggan', $id_pelanggan)
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

        return $kontrak;
    }

    public function get_kontrak(string $id_kontrak)
    {
        $kontrak = Kontrak::where('kontrak.id_kontrak', $id_kontrak)
            ->whereNotNull('kontrak.id_kontrak')
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
    
    public function list_pemesanan_aktif(string $id_pelanggan)
    {
        $pemesanan = Pemesanan::where([
            ['pemesanan.id_pelanggan', $id_pelanggan],
            ['pemesanan.status_pesanan', '!=', 'SELESAI']
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
                'mentor.foto_profil as foto_profil_mentor',
                'kontrak.waktu_kontrak',
                'kontrak.tenggat_waktu',
                'kontrak.status_kontrak',
            ]);

        return $pemesanan;
    }
    
    public function list_pemesanan_selesai(string $id_pelanggan)
    {
        $pemesanan = Pemesanan::where([
            ['pemesanan.id_pelanggan', $id_pelanggan],
            ['pemesanan.status_pesanan', '=', 'SELESAI']
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
                'pelanggan.email as email_pelanggan',
                'pelanggan.telp as telp_pelanggan',
                'mentor.nama as nama_mentor',
                'mentor.foto_profil as foto_profil_mentor',
                'kontrak.waktu_kontrak',
                'kontrak.tenggat_waktu',
                'kontrak.status_kontrak',
                'kontrak.total_harga',
            ]);

        return $pemesanan;
    }

    public function get_riwayat_pembayaran(string $id_pelanggan)
    {
        $riwayat = Pemesanan::where([
            ['pemesanan.id_pelanggan', '=', $id_pelanggan],
            ['status_pembayaran', '!=', 'BELUM DIBUAT'],
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
                'pelanggan.email as email_pelanggan',
                'pelanggan.telp as telp_pelanggan',
                'mentor.nama as nama_mentor',
                'mentor.foto_profil as foto_profil_mentor',
                'kontrak.waktu_kontrak',
                'kontrak.tenggat_waktu',
                'kontrak.status_kontrak',
                'kontrak.total_harga',
            ]);

        return $riwayat;
    }

    public function get_refcode(string $refcode)
    {
        $refCodeSQL = "CONCAT(SUBSTR(UPPER(MD5(CONCAT(id_pemesanan, nama_projek))), 1, 15), LPAD(id_pemesanan, 5, '0')) = ?";
        $pemesanan = Pemesanan::whereRaw($refCodeSQL, $refcode)->first();

        return $pemesanan;
    }

    public function get_pemesanan_by_refcode(string $refcode)
    {
        $pemesanan_refcode = $this->get_refcode($refcode);
        Log::info($pemesanan_refcode);
        if (!$pemesanan_refcode) return false;

        $pemesanan = Pemesanan::where('pemesanan.id_pemesanan', $pemesanan_refcode->id_pemesanan)
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
                'pelanggan.alamat as alamat_pelanggan',
                'pelanggan.email as email_pelanggan',
                'pelanggan.telp as telp_pelanggan',
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
            ['status_pesanan', '=', 'DIPROSES']
        ])
            ->count();
        $projek_selesai = Pemesanan::where([
            ['id_pelanggan', '=', $user->id_pelanggan],
            ['status_pesanan', '=', 'SELESAI']
        ])
            ->count();

        $pesanan_belum_bayar = Pemesanan::where([
            ['id_pelanggan', '=', $user->id_pelanggan],
            ['status_pembayaran', '!=', 'BELUM DIBUAT'],
            ['status_pembayaran', '!=', 'TERBAYAR'],
            ['status_pembayaran', '!=', 'KADALUARSA'],
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

        $pemesanan_aktif = $this->list_pemesanan_aktif($user->id_pelanggan)->get();
        $pemesanan = $this->list_pemesanan($user->id_pelanggan)->get();
        $kontrak_list = $this->list_kontrak($user->id_pelanggan)->get();

        $data = array(
            'kontrak_list' => $kontrak_list,
            'pemesanan' => $pemesanan,
            'pemesanan_aktif' => $pemesanan_aktif,
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
                'harga' => 'required|string',
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
        $user = Auth::guard('webcustomer')->user();
        $pesanan_belum_bayar = Pemesanan::where([
            ['id_pelanggan', '=', $user->id_pelanggan],
            ['status_pembayaran', '!=', 'BELUM DIBUAT'],
            ['status_pembayaran', '!=', 'TERBAYAR'],
            ['status_pembayaran', '!=', 'KADALUARSA'],
        ])
            ->first();
        $riwayat_pembayaran = $this->get_riwayat_pembayaran($user->id_pelanggan)->get();

        $data = array(
            'pesanan_belum_bayar' => $pesanan_belum_bayar,
            'riwayat_pembayaran' => $riwayat_pembayaran,
        );

        return view('customer.menu.pembayaran')->with($data);
    }
    public function proses_pembayaran(Request $request)
    {
        $refcode = $request->get('refcode');
        DB::beginTransaction();
        try {
            if (!$request->get('payment_method')) {
                throw new Exception('Mohon pilih metode pembayaran. ');
            }
            $id_pemesanan = $request->get('id_pemesanan');
            $total_harga = $request->get('total_harga');
            $payment_method = $request->get('payment_method');

            $pesanan = $this->get_pemesanan($id_pemesanan);


            $pesanan->kode_bank = $payment_method;
            $pesanan->total_harga = $total_harga;

            $response = requestInvoice($pesanan);
            Log::info("payment request " . json_encode($response));
            if ($response->success) {
                $pesanan->status_pembayaran = 'TERTUNDA';
                $pesanan->kode_referensi = $response->data->reference;
                unset($pesanan->total_harga);
                $pesanan->save();
                DB::commit();
                return redirect()->route('customer.menu.pembayaran.bukti_pembayaran', ['code' => $refcode]);
            } else {
                return redirect()->route('customer.menu.pembayaran.checkout', ['code' => $refcode])->withErrors(['message' => $response->message]);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->route('customer.menu.pembayaran.checkout', ['code' => $refcode])->withErrors(['message' => $e->getMessage()]);
        }
    }
    public function view_pembayaran_preview(Request $request)
    {
        $merchant_ref = $request->get('code');
        if (!$merchant_ref) {
            return redirect()->route('gakada');
        }
        $pemesanan = $this->get_pemesanan_by_refcode($merchant_ref);
        if (!$pemesanan) {
            return redirect()->route('gakada');
        }
        $response = detailInvoice($pemesanan->kode_referensi);

        if ($response->success) {
            $data = array(
                'pemesanan' => $pemesanan,
                'invoice' => $response->data
            );
            return view('customer.menu.preview-pembayaran')->with($data);
        } else {
            return redirect()->route('customer.menu.pembayaran.checkout', ['code' => $merchant_ref])->withErrors(['message' => $response->message]);
        }
    }
    public function view_kontrak()
    {
        return view('customer.menu.kontrak');
    }
    public function view_pembayaran_checkout(Request $request)
    {
        $id = Auth::guard('webcustomer')->user()->id_pelanggan;
        $code = $request->get('code');
        $pemesanan = $this->get_pemesanan_by_refcode($code);
        if (!$pemesanan) {
            Log::info('gaada 1');
            return redirect()->route('gakada');
        } else {
            if ($pemesanan->id_pelanggan != $id) {
                Log::info('gaada 2');
                return redirect()->route('gakada');
            }
            if ($pemesanan->status_pembayaran == 'TERTUNDA') {
                return redirect()->route('customer.menu.pembayaran.bukti_pembayaran', ['code' => $code]);
            } else {
                $payment_method = getPaymentMethod();
                $data = array(
                    'pemesanan' => $pemesanan,
                    'payment_method' => $payment_method
                );

                return view('customer.menu.checkout')->with($data);
            }
        }
    }
    public function view_nego()
    {
        return view('customer.menu.nego-kontrak');
    }
    public function view_review(Request $request)
    {
        $user = Auth::guard('webcustomer')->user();
        $id = $request->get('id');
        $pesanan = $this->get_pemesanan($id);

        if (!$pesanan) {
            return redirect()->route('gakada');
        }

        if ($pesanan->id_pelanggan != $user->id_pelanggan) {
            return redirect()->route('gakada');
        }

        $data = array(
            'pesanan' => $pesanan
        );

        return view('customer.menu.review-pesanan')->with($data);
    }
    public function view_detailkontrak(Request $request)
    {
        $id = $request->route('id');
        $pemesanan = $this->get_kontrak($id);
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
                $reference_code = getReferenceCode($pemesanan->id_pemesanan, $pemesanan->nama_projek); // Get Merchant Reference Code
                $kontrak->status_kontrak = 'SETUJU';
                $kontrak->save();
                $pemesanan->status_pembayaran = 'BELUM DIBAYAR';
                $pemesanan->save();
                DB::commit();
                return redirect()->route('customer.menu.pembayaran.checkout', ['code' => $reference_code])
                    ->withSuccess("Kontrak #$kontrak->id_kontrak telah disetujui! Silahkan melanjutkan pembayaran.");
            } else {
                $kontrak->status_kontrak = 'TIDAK SETUJU';
                $kontrak->save();
                $pemesanan->status_pesanan = 'MENUNGGU';
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
        $user = Auth::guard('webcustomer')->user();
        $pesanan_selesai = $this->list_pemesanan_selesai($user->id_pelanggan);

        $data = array(
            'pesanan_selesai' => $pesanan_selesai->get()
        );

        return view('customer.menu.penyerahan-pesanan')->with($data);
    }
}
