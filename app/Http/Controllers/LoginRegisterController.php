<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class LoginRegisterController extends Controller
{
    /**
     * Instantiate a new LoginRegisterController instance.
     */
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

    public function verify(Request $request) {
        DB::beginTransaction();
        try {
            $userReq = DB::table('users')->select(['user_id', 'verify_token'])->where('user_id', '=', $request->get('uid'))->first();

            if ($userReq) {
                $userHash = $userReq->verify_token;
                if ($userHash == $request->get('token')) {
                    User::where('user_id', '=', $userReq->user_id)
                    ->update([
                        'account_status' => 'A',
                        'verify_token' => '',
                    ]);
                    DB::commit();
                    return redirect()->route('login')->withSuccess('Verifikasi berhasil! Silahkan login.');
                }
            }
            DB::commit();
            return redirect()->route('login')->withErrors('Maaf verifikasi akun sudah tidak valid');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->route('login')->withErrors(['message' => $e->getMessage()]);
        }
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $request->validate([
                'name' => 'required|string|max:250',
                'email' => 'required|email|max:250|unique:users',
                'password' => 'required|min:8|confirmed',
                'accept' => 'required'
            ]); 
    
            $verify_token = Hash::make($request->email.env("VALIDATE_KEY"));

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'verify_token' => $verify_token
            ]);

            $user->notify(new \App\Notifications\Daftar);

            DB::commit();
            return redirect()->route('login')->withSuccess('Registrasi berhasil, silahkan cek email kamu untuk melanjutkan verifikasi.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->route('register')->withErrors($e->getMessage());
        }
        
    }

    public function login()
    {
        return view('auth.login');
    }

    
    public function authenticate(Request $request)
    {
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

        if (Auth::attempt($credentials, $rememberMe)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->withErrors(['message' => 'Email atau Password tidak valid.']);
        }
    }

    public function dashboard()
    {
        if (Auth::check()) {
            $user_data = Auth::user();

            $account_status = $user_data->account_status;
            $ban_message = DB::table('global_parameter')->get()->where('code', 'ban_message')->first();
            $verify_message = DB::table('global_parameter')->get()->where('code', 'verify_message')->first();

            if ($account_status != 'A') {
                Auth::logout();
                $message = "";
                
                if ($account_status == 'B') {
                    $message = !empty($ban_message) ? $ban_message->value_string : 'Akun anda telah ditangguhkan, Hubungi CS KodeMaya';
                } else if ($account_status == 'P') {
                    $message = !empty($verify_message) ? $verify_message->value_string : "Maaf kamu belum verifikasi email, belum menerima email? silahkan klik tombol lupa password.";
                }
                
                return redirect()->route('login')
                ->withErrors(['message' => $message]);
            }

            $account_type = $user_data->account_type;

            if ($account_type == 'A') {
                return redirect()->route('admin.menu.dashboard')->withSuccess('Success Login Admin');
            } else if ($account_type == 'M') {
                return redirect()->route('mentor.menu.dashboard')->withSuccess('Success Login Mentor');
            } else if ($account_type == 'C') {
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
