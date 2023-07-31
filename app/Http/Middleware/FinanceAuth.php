<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class FinanceAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('webfinance')->check()) {
            $user_data = Auth::guard('webfinance')->user();

            $acc_status = $user_data->status_akun;

            if ($acc_status == 'TIDAK AKTIF') {
                Auth::guard('webfinance')->logout();
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
