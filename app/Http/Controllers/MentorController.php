<?php

namespace App\Http\Controllers;

use App\Mail\PesananDiambil;
use Exception;
use App\Models\Kontrak;
use App\Models\Mentor;
use App\Models\Pemesanan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

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

    public function get_list_pesanan(string $id_mentor)
    {
        $riwayat = Pemesanan::where([
            ['pemesanan.id_mentor', '=', $id_mentor],
            ['status_pembayaran', '!=', 'BELUM DIBUAT'],
            // ['pemesanan.kategori', 'mentor.keahlian'],
            // ['status_pembayaran', '!=', 'BELUM DIBAYAR'],
            // ['status_pembayaran', '!=', 'TERTUNDA'],
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

    public function get_pemesanan(string $id_pemesanan)
    {
        $pemesanan = Pemesanan::where([
            ['id_pemesanan', $id_pemesanan],
            // ['pemesanan.kategori', 'mentor.keahlian'],
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
            })->first([
                'pemesanan.*',
                'pelanggan.nama as nama_pelanggan',
                'pelanggan.foto_profil as foto_profil_pelanggan',
                'pelanggan.email as email_pelanggan',
                'mentor.nama as nama_mentor',
                'mentor.foto_profil as foto_profil_mentor',
                'mentor.email as email_mentor',
                'kontrak.waktu_kontrak',
                'kontrak.tenggat_waktu',
                'kontrak.status_kontrak',
            ]);

        return $pemesanan;
    }

    public function get_pemesanan_by_mentor(string $id_mentor)
    {
        $pemesanan = Pemesanan::where([
            ['pemesanan.id_mentor', $id_mentor],
            ['pemesanan.status_pesanan', '!=', 'SELESAI'],
            // ['pemesanan.kategori', 'mentor.keahlian'],
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

    public function get_pemesanan_by_mentor_active(string $id_mentor)
    {
        $pemesanan = Pemesanan::where([
            ['pemesanan.id_mentor', $id_mentor],
            ['pemesanan.status_pesanan', '!=', 'MENUNGGU'],
            ['pemesanan.status_pesanan', '!=', 'SELESAI'],
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
        $pemesanan = Pemesanan::where([
            ['pemesanan.status_pesanan', $status_pesanan],
            // ['pemesanan.kategori', 'WEBSITE'],
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

            // KEAHLIAN KATERGORI MASIH BELUM BIsA

        //     $pemesanan2 = Pemesanan::where([
        //         ['pemesanan.status_pesanan', $status_pesanan],
        //         ['pemesanan.kategori', 'mentor.keahlian'],
        //     ])
        //         ->leftJoin('pelanggan', function ($join) {
        //             $join->on('pelanggan.id_pelanggan', '=', 'pemesanan.id_pelanggan');
        //         })
        //         ->leftJoin('mentor', function ($join) {
        //             $join->on('mentor.id_mentor', '=', 'pemesanan.id_mentor');
        //         })
        //         ->leftJoin('kontrak', function ($join) {
        //             $join->on('kontrak.id_kontrak', '=', 'pemesanan.id_kontrak');
        //         })
        //         ->leftJoin('pegawai', function ($join) {
        //             $join->on('pegawai.id_pegawai', '=', 'pemesanan.id_pegawai');
        //         })->toSql();
        // Log::info($pemesanan2);
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
        $pemesanan_mentor = $this->get_pemesanan_by_mentor_active($user->id_mentor)->first();
        $pemesanan = $this->get_pemesanan_by_status('MENUNGGU');
        $data = array(
            'pemesanan_mentor_list' => $pemesanan_mentor_list,
            'pemesanan_mentor' => $pemesanan_mentor,
            'pemesanan' => $pemesanan->get(),
            'total_pemesanan' => $pemesanan->count(),
        );
        return view('mentor.menu.pemesanan')->with($data);
    }
    public function view_pengerjaan_pemesanan(Request $request)
    {
        $id_pemesanan = $request->get('id');
        $pesanan = $this->get_pemesanan($id_pemesanan);

        $data = array(
            'pesanan' => $pesanan,
        );

        return view('mentor.menu.pengerjaan')->with($data);
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

            $mentor = Mentor::find($user->id_mentor);
            if ($mentor->status_mentor == 'SIBUK') {
                $pesanan_mentor = Pemesanan::where([
                    ['id_mentor', $user->id_mentor],
                    ['status_pesanan', 'DIPROSES'],
                ])->first();
                throw new Exception("Maaf kamu masih mengerjakan projek $pesanan_mentor->nama_projek");
            } else {
                $mentor->status_mentor = 'SIBUK';
                $mentor->save();

                $pemesanan = $this->get_pemesanan($id);
                $pemesanan->id_mentor = $user->id_mentor;
                $pemesanan->status_pesanan = "DIPROSES";
                $pemesanan->save();


                $data = array(
                    'nama_pelanggan' => $pemesanan->nama_pelanggan,
                    'nama_mentor' => $pemesanan->nama_mentor,
                    'nama_pesanan' => $pemesanan->nama_projek . " (#$pemesanan->id_pemesanan)",
                );

                Mail::to($pemesanan->email_pelanggan)->send(new PesananDiambil($data));
                DB::commit();
            }

            return redirect()->route('mentor.menu.pemesanan')
                ->withSuccess("I||Berhasil diambil||Silahkan cek menu negosiasi.");
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->route('mentor.menu.pemesanan')->withErrors(['message' => "I||Gagal  diambil||" . $e->getMessage()]);
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
        $user = Auth::guard('webmentor')->user();
        $list_pesanan = $this->get_list_pesanan($user->id_mentor)->get();

        $data = array(
            'list_pesanan' => $list_pesanan
        );
        return view('mentor.menu.penyerahan-pesanan')->with($data);
    }
    public function upload_projek(Request $request)
    {
        DB::beginTransaction();
        try {
            $id_pemesanan = $request->route('id');
            $pemesanan = $this->get_pemesanan($id_pemesanan);

            $file = $request->file('file');
            $uuid =  Str::uuid();
            $filename = $uuid . "." . $file->extension();
            $mainFolder = env('GOOGLE_DRIVE_FOLDER');
            $projectFolder = env('GOOGLE_DRIVE_FOLDER_PROJECT');
            $folderpath = $mainFolder . "/" . $projectFolder;

            if ($pemesanan->file_project) {
                $driveID = getDriveID($pemesanan->file_project);
                deleteFile($driveID);
            }

            $metadata = uploadFile($file, 'project');
            $url = makeUrl($metadata);
            $pemesanan->file_projek = $url;
            $pemesanan->save();
            DB::commit();
            return array(
                'success' => true,
                'message' => 'Berhasil upload file.',
            );
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return array(
                'success' => false,
                'message' => $e->getMessage(),
            );
        }
    }
    public function update_pengerjaan_pemesanan(Request $request)
    {
        DB::beginTransaction();
        try {
            $request->validate([
                'id_pemesanan' => 'required|string',
                'deskripsi_pemesanan' => 'required|string',
            ]);

            $pemesanan = Pemesanan::find($request->get('id_pemesanan'));

            if ($request->get('status_pesanan')) {
                $pemesanan->status_pesanan = $request->get('status_pesanan');
            }

            $pemesanan->deskripsi_pemesanan = $request->get('deskripsi_pemesanan');
            $pemesanan->save();
            DB::commit();
            return redirect()->route('mentor.menu.penyerahan-pesanan')
                ->withSuccess("I||Berhasil disimpan||");
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->route('mentor.menu.penyerahan-pesanan.pengerjaan_pemesanan', ['id' => $request->get('id_pemesanan')])->withErrors(['message' => "I||Gagal  disimpan||" . $e->getMessage()]);
        }
    }
    public function proses_penyerahan()
    {
        return view('mentor.menu.form-penyerahan-pesanan');
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
                ->withSuccess("I||Berhasil dibuat||");
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->route('mentor.menu.pemesanan.tambah-kontrak', ['id' => $request->get('id_pemesanan')])->withErrors(['message' => "P||Gagal dibuat||" . $e->getMessage()]);
        }
    }
}
