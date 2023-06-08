<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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

    /**
     * Display a registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('auth.register');
    }

    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed',
            'accept' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('dashboard')
            ->withSuccess('You have successfully registered & logged in!');
    }

    /**
     * Display a login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Authenticate the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            return redirect()->route('login')->withErrors(['message' => 'Email atau Password invalid.']);
        }
    }

    /**
     * Display a dashboard to authenticated users.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        if (Auth::check()) {
            $user_data = Auth::user();
            $account_type = $user_data->account_type;
            $account_status = $user_data->account_status;
            $ban_message = DB::table('global_parameter')->get()->where('code', 'ban_message')->first();

            if ($account_status == 'B') {
                Auth::logout();
                return redirect()->route('login')
                    ->withErrors(['message' => !empty($ban_message) ? $ban_message->value_string : 'Akun anda telah ditangguhkan, Hubungi CS KodeMaya']);
            }

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

    /**
     * Log out the user from application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');;
    }
}
