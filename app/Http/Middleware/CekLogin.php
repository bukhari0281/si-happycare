<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class CekLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (auth()->user()->role == $role) {
            return $next($request);

        }

        // Simpan URL halaman sebelumnya
        Session::put('previous_url', url()->previous());

        // Berikan pesan peringatan
        return redirect()->back()->with('error', 'Maaf, Anda tidak memiliki akses ke halaman ini.');
    }
}
