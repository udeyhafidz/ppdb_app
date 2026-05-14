<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.auth')]
class Register extends Component
{
    public $name, $email, $password, $password_confirmation;
    public $otpTerkirim;

    public function register() {
        $this->validate([
            'name'      => 'required|string|min:4',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|confirmed|min:6',
        ]);

        $user = User::create([
            'name'      => $this->name,
            'email'     => $this->email,
            'password'  => Hash::make($this->password),
            'role'      => 'ortu',
            'is_active' => false,
        ]);
    }

    public function kirimOtp()
    {
        $this->validate([
            'email' => 'required|email|unique:users,email',
        ]);

        $otp = rand(100000, 999999);

        session([
            'otp_code' => $otp,
            'otp_email' => $this->email,
            'otp_expired_at' => now()->addMinutes(5),
        ]);

        Mail::raw(
            "Kode OTP Anda adalah: {$otp}. Berlaku selama 5 menit.",
            function ($message) {
                $message->to($this->email)
                    ->subject('Kode OTP Verifikasi');
            }
        );

        $this->otpTerkirim = true;

        session()->flash('success', 'Kode OTP berhasil dikirim.');
    }

    public function verifikasiOtp()
    {
        $this->validate([
            'kodeOtp' => 'required|digits:6',
        ]);

        if (session('otp_email') !== $this->email) {
            $this->addError('kodeOtp', 'Email tidak sesuai.');
            return;
        }

        if (now()->gt(session('otp_expired_at'))) {
            $this->addError('kodeOtp', 'OTP sudah kedaluwarsa.');
            return;
        }

        if (session('otp_code') != $this->kodeOtp) {
            $this->addError('kodeOtp', 'Kode OTP salah.');
            return;
        }

        // Buat akun setelah OTP valid
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => 'ortu',
            'is_active' => false,
        ]);

        session()->forget([
            'otp_code',
            'otp_email',
            'otp_expired_at',
        ]);

        session()->flash(
            'success',
            'Registrasi berhasil. Silakan tunggu persetujuan admin.'
        );

        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}