<?php

namespace App\Livewire;

use App\Models\DaftarUlang;
use App\Models\Pendaftar;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.auth')]
class DaftarUlangForm extends Component
{
    use WithFileUploads;

    public $kk;
    public $ktp;
    public $akta;
    public $foto;

    public $kk_lama;
    public $ktp_lama;
    public $akta_lama;
    public $foto_lama;

    public function mount()
{
    $pendaftar = Pendaftar::where(
        'user_id',
        auth()->id()
    )->first();

    if ($pendaftar) {

        $this->kk_lama = DaftarUlang::where(
            'pendaftar_id',
            $pendaftar->id
        )->where(
            'jenis_berkas',
            'kk'
        )->value('file');

        $this->akta_lama = DaftarUlang::where(
            'pendaftar_id',
            $pendaftar->id
        )->where(
            'jenis_berkas',
            'akta'
        )->value('file');

        $this->ktp_lama = DaftarUlang::where(
            'pendaftar_id',
            $pendaftar->id
        )->where(
            'jenis_berkas',
            'ktp'
        )->value('file');

        $this->foto_lama = DaftarUlang::where(
            'pendaftar_id',
            $pendaftar->id
        )->where(
            'jenis_berkas',
            'foto'
        )->value('file');
    }
}

    public function simpan()
    {
        // Validasi
        $this->validate([
            'kk' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'ktp' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'akta' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'foto' => 'required|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Ambil pendaftar milik user
        $pendaftar = Pendaftar::where(
            'user_id',
            auth()->id()
        )->first();

        if (!$pendaftar) {

            session()->flash(
                'error',
                'Data pendaftaran tidak ditemukan.'
            );

            return;
        }

        // Upload KK
        if ($this->kk) {

            $path = $this->kk->store('daftar_ulang');

            DaftarUlang::updateOrCreate(
                [
                    'pendaftar_id' => $pendaftar->id,
                    'jenis_berkas' => 'kk'
                ],
                [
                    'file' => $path
                ]
            );
        }

        // Upload KTP
        if ($this->ktp) {

            $path = $this->ktp->store('daftar_ulang');

            DaftarUlang::updateOrCreate(
                [
                    'pendaftar_id' => $pendaftar->id,
                    'jenis_berkas' => 'ktp'
                ],
                [
                    'file' => $path
                ]
            );
        }

        // Upload Akta
        if ($this->akta) {

            $path = $this->akta->store('daftar_ulang');

            DaftarUlang::updateOrCreate(
                [
                    'pendaftar_id' => $pendaftar->id,
                    'jenis_berkas' => 'akta'
                ],
                [
                    'file' => $path
                ]
            );
        }

        // Upload Foto
        if ($this->foto) {

            $path = $this->foto->store('daftar_ulang');

            DaftarUlang::updateOrCreate(
                [
                    'pendaftar_id' => $pendaftar->id,
                    'jenis_berkas' => 'foto'
                ],
                [
                    'file' => $path
                ]
            );
        }

            $pendaftar->update([
                'status_ulang' => 'pending'
            ]);

            session()->flash(
                'success',
                'Berkas daftar ulang berhasil diupload.'
            );

        $this->reset();

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.daftar-ulang-form');
    }
}