<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomerAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user_data = Auth::user();

            $acc_status = $user_data->status_akun;

            if ($acc_status == 'TIDAK AKTIF') {
                Auth::logout();
                return redirect()->route('login')
                ->withErrors(['message' => "Akun tidak aktif, mohon verifikasi akun terlebih dahulu"]);
            } else {
                return $next($request);
            }
        } else {
            return redirect()->route('login')
            ->withErrors(['message' => 'Silahkan login terlebih dahulu.'])
            ->onlyInput('message');
        }
    }
}
