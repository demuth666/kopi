<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Periksa apakah pengguna telah login
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Periksa peran pengguna
        $user = Auth::user();
        if (in_array($user->role, $roles)) {
            return $next($request);
        }

        // Tambahkan logika lain jika diperlukan (mis., tampilkan pesan kesalahan)
        return redirect('/')->with('error', 'Anda tidak memiliki akses.');
    }
}
