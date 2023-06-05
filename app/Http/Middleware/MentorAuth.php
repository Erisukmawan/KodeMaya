<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MentorAuth
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
            $account_type = $user_data->account_type;
            $account_status = $user_data->account_status;
            $ban_message = DB::table('global_parameter')->get()->where('code', 'ban_message')->first();

            if ($account_status == 'B') {
                Auth::logout();
                return redirect()->route('login')
                ->withErrors('message', !empty($ban_message) ? $ban_message->value_string : 'Akun anda telah ditangguhkan, Hubungi CS KodeMaya');
            }

            if ($account_type == 'M') {
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
