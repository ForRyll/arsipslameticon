<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Menampilkan halaman login kustom
     */
    public function showLoginForm()
    {
        // Jika user sudah login, langsung lempar ke Filament Admin Panel
        if (Auth::check()) {
            return redirect()->intended(filament()->getUrl());
        }

        return view('login'); // Sesuaikan dengan lokasi/nama file Blade login kamu
    }

    /**
     * Memproses proses masuk/autentikasi
     */
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'login'    => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $remember = $request->has('remember');

        // Otomatis mencocokkan input 'login' ke kolom 'email'
        // Kata sandi diproses dengan 'password_hash' sesuai skema Model User
        if (Auth::attempt(['email' => $credentials['login'], 'password' => $credentials['password']], $remember)) {
            $request->session()->regenerate();

            // Redirect ke Filament Admin Panel
            return redirect()->intended(filament()->getUrl());
        }

        // Jika gagal
        return back()->withErrors([
            'login' => 'Email atau password yang Anda masukkan salah.',
        ])->onlyInput('login');
    }

    /**
     * Memproses logout
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}