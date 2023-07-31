<?php

namespace App\Http\Controllers;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use App\Models\Pelanggan;
use App\Models\Mentor;
use App\Models\Pegawai;
use App\Models\Pemesanan;
use Exception;
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
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
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

            $user = Mentor::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'telp' => $request->telp,
                'keahlian' => $request->keahlian,
                'dokumen' => $file->getClientOriginalName(),
                'password' => Hash::make($request->password)
            ]);

            $filepath = env('GOOGLE_DRIVE_FOLDER') . "/" . env('GOOGLE_DRIVE_FOLDER_DOCUMENT') . "/" . $user->id_mentor . "." . $file->extension();

            Storage::disk('google')->put($filepath, $file->getContent());

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
        try {
            DB::beginTransaction();
            if (Auth::guard('webcustomer')->check()) {
            } else if (Auth::guard('webmentor')->check()) {
            } else if (Auth::guard('webadministration')->check()) {
            } else if (Auth::guard('webfinancial')->check()) {
            } else {
                return abort(403, 'Tidak diizinkan');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return abort(500, $e->getMessage());;
        }
    }

    public function change_profile(Request $request)
    {
        Log::info("coba change profile");
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
        } else if (Auth::guard('webfinancial')->check()) {
            DB::beginTransaction();
            try {
                $request->validate([
                    'nama' => 'required|string|max:250',
                    'alamat' => 'required|string|max:250',
                ]);

                $id = Auth::guard('webfinancial')->user()->id_pegawai;
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
}
