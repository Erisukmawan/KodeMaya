<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminAuth
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

            if ($account_type == 'A') {
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
