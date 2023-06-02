<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            'password' => 'required|min:8|confirmed'
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
            Log::info('Success login ', ['email' => $request->get('email'), 'password' => $request->get('password'), 'rememberMe' => $rememberMe]);
            $request->session()->regenerate();
            return redirect()->route('dashboard')->withSuccess('You have successfully logged in!');
        } else {
            Log::warning('Failed login.', ['email' => $request->get('email'), 'password' => $request->get('password')]);
            return back()->withErrors([
                'message' => 'User atau Password tidak valid.',
            ])->onlyInput('message');
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

            if ($account_type == 'A') {
                Log::info('Login as Admin');
                return redirect()->route('admin.dashboard');
            } else if ($account_type == 'M') {
                Log::info('Login as Mentor');
                return redirect()->route('mentor.dashboard');
            } else if ($account_type == 'C') {
                Log::info('Login as User');
                return redirect()->route('customer.dashboard');
            }
        }
        return redirect()->route('login')
            ->withErrors([
                'message' => 'Login untuk mengakses dashboard.',
            ])
            ->onlyInput('message');
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
