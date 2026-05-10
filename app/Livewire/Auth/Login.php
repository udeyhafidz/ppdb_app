<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
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

        if (Auth::attempt([ 'email' => $this->email, 'password' => $this->password ])) {

            if (!auth()->user()->is_active) {

                Auth::logout();

                $this->addError(
                    'email',
                    'Akun Anda belum disetujui admin, tolong tunggu beberapa menit.'
                );

                return;
            }

            session()->regenerate();

            return redirect()->route('home');
        }

        //$this->addError('email', 'Email atau password salah');

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