<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.auth')]
class Login extends Component
{
    public $email;
    public $password;
    public $is_active;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Key unik berdasarkan email + IP address
        $key = Str::lower($this->email) . '|' . request()->ip();

        // Jika salah lebih dari 3 kali, blokir 5 menit
        if (RateLimiter::tooManyAttempts($key, 3)) {
            $seconds = RateLimiter::availableIn($key);
            $minutes = ceil($seconds / 60);

            $this->addError(
                'email',
                "Terlalu banyak percobaan login. Silakan coba lagi dalam {$minutes} menit."
            );

            return;
        }

        if (Auth::attempt([ 'email' => $this->email, 'password' => $this->password ])) {

            if (!auth()->user()->is_active) {

                Auth::logout();

                $this->addError(
                    'email',
                    'Akun Anda belum disetujui admin, tolong tunggu beberapa menit.'
                );

                return;
            }

            // Jika login berhasil, reset jumlah percobaan gagal
            RateLimiter::clear($key);

            session()->regenerate();

            return redirect()->route('home');
        }

        //$this->addError('email', 'Email atau password salah');

        // Jika login gagal, tambah hitungan percobaan
        // 300 detik = 5 menit
        RateLimiter::hit($key, 300);

        $sisaPercobaan = 3 - RateLimiter::attempts($key);

        $this->addError(
            'email',
            "Email atau password salah. Sisa percobaan: {$sisaPercobaan} kali."
        );

        session()->flash(
            'error',
            'Email atau password salah'
        );
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}