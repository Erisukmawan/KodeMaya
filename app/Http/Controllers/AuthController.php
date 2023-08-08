<?php

namespace App\Http\Controllers;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use App\Models\Pelanggan;
use App\Models\Mentor;
use App\Models\Pegawai;
use App\Models\Pemesanan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;

class AuthController extends Controller
{
    public function __construct()
    {
        // $this->middleware('guest')->except([
        //     'logout', 'dashboard'
        // ]);
    }


    public function register()
    {
        return view('auth.register');
    }
    public function register_mentor()
    {
        return view('auth.register_mentor');
    }

    public function register_customer_process(Request $request)
    {
        DB::beginTransaction();

        try {
            $request->validate([
                'nama' => 'required|string|max:250',
                'email' => 'required|email|max:250|unique:pelanggan',
                'alamat' => 'required|string|max:250',
                'telp' => 'required|string|max:250',
                'password' => 'required|min:8|confirmed',
                'accept' => 'required'
            ]);

            $user = Pelanggan::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'telp' => $request->telp,
                'password' => Hash::make($request->password)
            ]);

            Log::info('Customer Register ' . $user);

            $user->notify(new \App\Notifications\VerifikasiPelanggan);
            DB::commit();
            return redirect()->route('login')->withSuccess('Registrasi berhasil, silahkan cek email (termasuk spam) kamu untuk melanjutkan verifikasi.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->route('register')->withErrors($e->getMessage());
        }
    }

    public function register_mentor_process(Request $request)
    {
        DB::beginTransaction();

        try {
            $request->validate([
                'nama' => 'required|string|max:250',
                'email' => 'required|email|max:250|unique:mentor',
                'alamat' => 'required|string|max:250',
                'telp' => 'required|string|max:250',
                'keahlian' => 'required|string|max:250',
                'dokumen' => [
                    'required',
                    File::types(['zip', 'rar', '7z', 'tar.gz'])
                        ->max(25 * 1024),
                ],
                'password' => 'required|min:8|confirmed',
                'accept' => 'required'
            ]);

            $file = $request->file('dokumen');

            $metadata = uploadFile($file, 'document');
            $url = makeUrl($metadata);

            $user = Mentor::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'telp' => $request->telp,
                'keahlian' => $request->keahlian,
                'dokumen' => $url,
                'password' => Hash::make($request->password)
            ]);


            Log::info('Mentor Register ' . json_encode($user));

            $user->notify(new \App\Notifications\VerifikasiMentor);
            DB::commit();
            return redirect()->route('login')->withSuccess('Registrasi berhasil, silahkan cek email (termasuk spam) kamu untuk melanjutkan verifikasi.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->route('register-mentor')->withErrors($e->getMessage());
        }
    }

    public function verify_account(Request $request)
    {
        DB::beginTransaction();
        try {
            $token_jwt = $request->get('token');
            $key = env('VALIDATE_KEY');
            $decoded = JWT::decode($token_jwt, new Key($key, 'HS256'));

            $account_type = $request->get('acc_type');

            Log::info('Acc Type ' . $account_type);


            if ($account_type == 'customer') {
                Log::info('Customer Verify ' . json_encode($decoded));
                Pelanggan::where('id_pelanggan', '=', $decoded->id_pelanggan)
                    ->update([
                        'status_akun' => 'AKTIF'
                    ]);
            } else if ($account_type == 'mentor') {
                Log::info('Customer Verify ' . json_encode($decoded));
                Mentor::where('id_mentor', '=', $decoded->id_mentor)
                    ->update([
                        'status_akun' => 'AKTIF'
                    ]);
            } else if ($account_type == 'employee') {
                Log::info('Customer Verify ' . json_encode($decoded));
                Pelanggan::where('id_pelanggan', '=', $decoded->id_pelanggan)
                    ->update([
                        'status_akun' => 'AKTIF'
                    ]);
            } else {
                throw new Exception("Tipe akun tidak valid.");
            }

            DB::commit();
            return redirect()->route('login')->withSuccess('Verifikasi berhasil! Silahkan login.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->route('login')->withErrors(['message' => $e->getMessage()]);
        }
    }

    public function login()
    {
        return view('auth.login');
    }


    public function login_auth(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            $rememberMe = false;

            if ($request->get('keep')) {
                $isRemember = $request->get('keep');
                if ($isRemember == 'on') {
                    $rememberMe = true;
                }
            }

            $email = $request->get('email');
            $password = $request->get('password');

            $users = DB::select(
                "
                SELECT p.id_pelanggan AS id, p.nama, p.email, p.password, p.status_akun, 'customer' as type FROM pelanggan AS p WHERE p.email = :email1
                    UNION
                SELECT m.id_mentor AS id, m.nama, m.email, m.password, m.status_akun, 'mentor' as type FROM mentor AS m WHERE m.email = :email2
                    UNION
                SELECT pg.id_pegawai AS id, pg.nama, pg.email, pg.password, pg.status_akun, lower(pg.jabatan) as type FROM pegawai AS pg WHERE pg.email = :email3
            ",
                array("email1" => $email, "email2" => $email, "email3" => $email)
            );


            if (count($users) > 0) {
                $user = $users[0];

                if ($user->status_akun == 'TIDAK AKTIF') {
                    throw new Exception('Verifikasi email terlebih dahulu untuk melanjutkan!');
                }

                if ($user->type == 'customer') {
                    if (Auth::guard('webcustomer')->attempt($credentials, $rememberMe)) {
                        Log::info('Customer Login ' . json_encode($user));
                        return redirect()->route('customer.menu.dashboard');
                    } else {
                        throw new Exception('Email atau Password tidak valid.');
                    }
                } else if ($user->type == 'mentor') {
                    if (Auth::guard('webmentor')->attempt($credentials, $rememberMe)) {
                        Log::info('Mentor Login ' . json_encode($user));
                        return redirect()->route('mentor.menu.dashboard');
                    } else {
                        throw new Exception('Email atau Password tidak valid.');
                    }
                } else if ($user->type == 'administrasi') {
                    if (Auth::guard('webadministration')->attempt($credentials, $rememberMe)) {
                        Log::info('Administration Login ' . json_encode($user));
                        return redirect()->route('admin.menu.dashboard');
                    } else {
                        throw new Exception('Email atau Password tidak valid.');
                    }
                } else if ($user->type == 'keuangan') {
                    if (Auth::guard('webfinance')->attempt($credentials, $rememberMe)) {
                        Log::info('Finance Login ' . json_encode($user));
                        return redirect()->route('financial.menu.dashboard');
                    } else {
                        throw new Exception('Email atau Password tidak valid.');
                    }
                } else {
                    throw new Exception('Akun ini tidak memenuhi kriteria, mohon hubungi admin.');
                }
            } else {
                throw new Exception('Akun anda tidak terdaftar.');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->route('login')->withErrors(['message' => $e->getMessage()]);
        }
    }

    public function change_picture(Request $request)
    {
        DB::beginTransaction();
        try {
            $file = $request->file('image');
            $uuid =  Str::uuid();
            $filename = $uuid . "." . $file->extension();
            $mainFolder = env('GOOGLE_DRIVE_FOLDER');
            $profileFolder = env('GOOGLE_DRIVE_FOLDER_PROFILE');
            $folderpath = $mainFolder . "/" . $profileFolder;

            $user = "";
            $user_view = "";

            if (Auth::guard('webcustomer')->check()) {
                $user_view = "customer";
                $id = Auth::guard('webcustomer')->user()->id_pelanggan;
                $user = Pelanggan::find($id);
            } else if (Auth::guard('webmentor')->check()) {
                $user_view = "mentor";
                $id = Auth::guard('webmentor')->user()->id_mentor;
                $user = Mentor::find($id);
            } else if (Auth::guard('webadministration')->check()) {
                $user_view = "admin";
                $id = Auth::guard('webadministration')->user()->id_pegawai;
                $user = Pegawai::find($id);
            } else if (Auth::guard('webfinance')->check()) {
                $user_view = "financial";
                $id = Auth::guard('webfinance')->user()->id_pegawai;
                $user = Pegawai::find($id);
            } else {
                return redirect()->route('login')
                    ->withErrors(['message' => 'Silahkan login untuk mengakses dashboard.']);
            }

            if ($user->foto_profil) {
                $driveID = getDriveID($user->foto_profil);
                deleteFile($driveID);
            }
            $metadata = uploadFile($file, 'profile');
            $url = makeUrl($metadata);
            $user->foto_profil = $url;
            $user->save();
            DB::commit();
            return redirect()->route($user_view . ".profile")
                ->withSuccess('Berhasil ubah gambar profil!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return abort(500, $e->getMessage());;
        }
    }

    public function change_profile(Request $request)
    {
        if (Auth::guard('webcustomer')->check()) {
            DB::beginTransaction();
            try {
                $request->validate([
                    'nama' => 'required|string|max:250',
                    'alamat' => 'required|string|max:250',
                ]);

                Log::info("Customer Change Profile");
                $id = Auth::guard('webcustomer')->user()->id_pelanggan;
                $user = Pelanggan::find($id);
                $user->nama = $request->get('nama');
                $user->alamat = $request->get('alamat');
                $user->save();
                DB::commit();
                return redirect()->route('customer.profile')
                    ->withSuccess('Berhasil ubah profil!');
            } catch (\Exception $e) {
                DB::rollBack();
                Log::error($e);
                return redirect()->route('customer.profile')->withErrors(['message' => $e->getMessage()]);
            }
        } else if (Auth::guard('webmentor')->check()) {
            DB::beginTransaction();
            try {
                $request->validate([
                    'nama' => 'required|string|max:250',
                    'alamat' => 'required|string|max:250',
                ]);

                Log::info("Mentor Change Profile");
                $id = Auth::guard('webmentor')->user()->id_mentor;
                $user = Mentor::find($id);
                $user->nama = $request->get('nama');
                $user->alamat = $request->get('alamat');
                $user->save();
                DB::commit();
                return redirect()->route('mentor.profile')
                    ->withSuccess('Berhasil ubah profil!');
            } catch (\Exception $e) {
                DB::rollBack();
                Log::error($e);
                return redirect()->route('mentor.profile')->withErrors(['message' => $e->getMessage()]);
            }
        } else if (Auth::guard('webadministration')->check()) {
            DB::beginTransaction();
            try {
                $request->validate([
                    'nama' => 'required|string|max:250',
                    'alamat' => 'required|string|max:250',
                ]);

                $id = Auth::guard('webadministration')->user()->id_pegawai;
                $user = Pegawai::find($id);
                $user->nama = $request->get('nama');
                $user->alamat = $request->get('alamat');
                $user->save();
                DB::commit();
                return redirect()->route('admin.profile')
                    ->withSuccess('Berhasil ubah profil!');
            } catch (\Exception $e) {
                DB::rollBack();
                Log::error($e);
                return redirect()->route('admin.profile')->withErrors(['message' => $e->getMessage()]);
            }
        } else if (Auth::guard('webfinance')->check()) {
            DB::beginTransaction();
            try {
                $request->validate([
                    'nama' => 'required|string|max:250',
                    'alamat' => 'required|string|max:250',
                ]);

                $id = Auth::guard('webfinance')->user()->id_pegawai;
                $user = Pegawai::find($id);
                $user->nama = $request->get('nama');
                $user->alamat = $request->get('alamat');
                $user->save();
                DB::commit();
                return redirect()->route('financial.profile')
                    ->withSuccess('Berhasil ubah profil!');
            } catch (\Exception $e) {
                DB::rollBack();
                Log::error($e);
                return redirect()->route('financial.profile')->withErrors(['message' => $e->getMessage()]);
            }
        } else {
            Log::warning("Invalid Auth Change Profile");
            return redirect()->route('login')
                ->withErrors(['message' => 'Silahkan login untuk mengakses dashboard.']);
        }
    }

    public function dashboard()
    {
        if (Auth::guard('webcustomer')->check()) {
            return redirect()->route('customer.menu.dashboard')->withSuccess('Success Login Customer');
        } else if (Auth::guard('webmentor')->check()) {
            return redirect()->route('mentor.menu.dashboard')->withSuccess('Success Login Mentor');
        } else if (Auth::guard('webemployee')->check()) {
            return redirect()->route('admin.menu.dashboard')->withSuccess('Success Login Admin');
        } else {
            return redirect()->route('login')
                ->withErrors(['message' => 'Silahkan login untuk mengakses dashboard.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('Anda berhasil keluar akun.');
    }

    public function payment_callback(Request $request)
    {
        DB::beginTransaction();
        try {
            // Ambil data JSON
            $data_json = $request->getContent();

            $json = json_decode($data_json);
            $json = json_encode($json);

            Log::info("get callback $json");

            $signature = createSignature($json);

            // Ambil callback signature
            $callbackSignature = isset($_SERVER['HTTP_X_CALLBACK_SIGNATURE'])
                ? $_SERVER['HTTP_X_CALLBACK_SIGNATURE']
                : '';

            // Validasi signature
            if ($callbackSignature !== $signature) {
                return json_encode([
                    'success' => false,
                    'message' => 'Invalid signature',
                ]);
            }

            $data = json_decode($json);

            if (JSON_ERROR_NONE !== json_last_error()) {
                return json_encode([
                    'success' => false,
                    'message' => 'Invalid data sent by payment gateway',
                ]);
            }

            // Hentikan proses jika callback event-nya bukan payment_status
            if ('payment_status' !== $_SERVER['HTTP_X_CALLBACK_EVENT']) {
                return json_encode([
                    'success' => false,
                    'message' => 'Unrecognized callback event: ' . $_SERVER['HTTP_X_CALLBACK_EVENT'],
                ]);
            }

            $invoiceId = $data->merchant_ref;
            $tripayReference = $data->reference;
            $status = strtoupper((string) $data->status);


            if ($data->is_closed_payment === 1) {
                $pemesanan = Pemesanan::where([
                    ['kode_referensi', $tripayReference],
                    ['status_pembayaran', 'TERTUNDA']
                ])->first();

                if (!$pemesanan) {
                    return json_encode([
                        'success' => false,
                        'message' => 'Invoice not found or already paid: ' . $invoiceId,
                    ]);
                }

                switch ($status) {
                        // handle status PAID
                    case 'PAID':
                        $pemesanan->status_pembayaran = 'TERBAYAR';
                        $pemesanan->save();
                        systemNotify("payment-$invoiceId", "PAID", $data);
                        DB::commit();
                        break;

                        // handle status EXPIRED
                    case 'EXPIRED':
                        $pemesanan->status_pembayaran = 'KADALUARSA';
                        $pemesanan->save();
                        systemNotify("payment-$invoiceId", "EXPIRED", $data);
                        DB::commit();
                        break;

                        // handle status FAILED
                    case 'FAILED':
                        $pemesanan->status_pembayaran = 'GAGAL';
                        $pemesanan->save();
                        systemNotify("payment-$invoiceId", "FAILED", $data);
                        DB::commit();
                        break;

                    default:
                        return json_encode([
                            'success' => false,
                            'message' => 'Unrecognized payment status',
                        ]);
                }

                return json_encode(['success' => true]);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return json_encode([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }
}
