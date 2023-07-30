<?php

namespace App\Http\Controllers;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use App\Models\Pelanggan;
use App\Models\Mentor;
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

            $filepath = env('GOOGLE_DRIVE_FOLDER')."/".env('GOOGLE_DRIVE_FOLDER_DOCUMENT')."/".$user->id_mentor.".".$file->extension();

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
                SELECT pg.id_pegawai AS id, pg.nama, pg.email, pg.password, pg.status_akun, 'employee' as type FROM pegawai AS pg WHERE pg.email = :email3
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
                } else if ($user->type == 'employee') {
                    if (Auth::guard('webemployee')->attempt($credentials, $rememberMe)) {
                        Log::info('Employee Login ' . json_encode($user));
                        return redirect()->route('employee.menu.dashboard');
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
        
        // if (Auth::attempt($credentials, $rememberMe)) {
        //     $request->session()->regenerate();
        //     Log::info('User login ' . Auth::user()->email);
            // return redirect()->route('dashboard');
        // } else {
            // return redirect()->route('login')->withErrors(['message' => 'Email atau Password tidak valid.']);
        // }
    }

    public function dashboard()
    {
        if (Auth::check()) {
            $user_data = Auth::user();
            $user_status = $user_data->user_status;
            if ($user_status != 'A') {
                Auth::logout();

                $ban_message = DB::table('global_parameter')->get()->where('code', 'ban_message')->first();
                $verify_message = DB::table('global_parameter')->get()->where('code', 'verify_message')->first();
                $message = "";

                if ($user_status == 'B') {
                    $message = !empty($ban_message) ? $ban_message->value_string : 'Akun anda telah ditangguhkan, Hubungi CS KodeMaya';
                } else if ($user_status == 'P') {
                    $message = !empty($verify_message) ? $verify_message->value_string : "Maaf kamu belum verifikasi email, belum menerima email? silahkan klik tombol lupa password.";
                }

                return redirect()->route('login')
                    ->withErrors(['message' => $message]);
            }

            $user_type = $user_data->user_type;

            if ($user_type == 'A') {
                return redirect()->route('admin.menu.dashboard')->withSuccess('Success Login Admin');
            } else if ($user_type == 'M') {
                return redirect()->route('mentor.menu.dashboard')->withSuccess('Success Login Mentor');
            } else if ($user_type == 'C') {
                return redirect()->route('customer.menu.dashboard')->withSuccess('Success Login Customer');
            }
        }
        return redirect()->route('login')
            ->withErrors(['message' => 'Silahkan login untuk mengakses dashboard.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');
    }
}
