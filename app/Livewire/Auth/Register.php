<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.auth')]
class Register extends Component
{
    public $name, $email, $password, $password_confirmation;

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

        session()->flash(
            'success',
            'Registrasi berhasil! Silakan tunggu persetujuan admin sebelum login.'
        );

        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}