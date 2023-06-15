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

            if ($account_type == 'C') {
                return $next($request);
            } else {
                return abort(403);
            }
        } else {
            return redirect()->route('login')
            ->withErrors('message', 'Silahkan login terlebih dahulu.')
            ->onlyInput('message');
        }
    }
}
