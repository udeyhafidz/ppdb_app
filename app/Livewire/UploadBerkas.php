<?php

namespace App\Livewire;

use App\Models\Berkas;
use App\Models\Pendaftar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.auth')]
class UploadBerkas extends Component
{
    use WithFileUploads;

    public $berkas = [];
    public $berkasData = [];

    public $kk;
    public $akta;
    public $ktp;
    public $foto;

    public $sudahUpload = false;

    public $kk_lama;
    public $akta_lama;
    public $ktp_lama;
    public $foto_lama;

    public function mount()
{
    $pendaftar = Pendaftar::where(
        'user_id',
        auth()->id()
    )->first();

    if ($pendaftar) {
        $this->berkas = Berkas::where(
            'pendaftar_id',
            $pendaftar->id
        )->get();

        $this->berkasData = $this->berkas->keyBy('jenis_berkas');
    }

    if ($pendaftar) {

        $this->kk_lama = Berkas::where(
            'pendaftar_id',
            $pendaftar->id
        )->where(
            'jenis_berkas',
            'kk'
        )->value('file');

        $this->akta_lama = Berkas::where(
            'pendaftar_id',
            $pendaftar->id
        )->where(
            'jenis_berkas',
            'akta'
        )->value('file');

        $this->ktp_lama = Berkas::where(
            'pendaftar_id',
            $pendaftar->id
        )->where(
            'jenis_berkas',
            'ktp'
        )->value('file');

        $this->foto_lama = Berkas::where(
            'pendaftar_id',
            $pendaftar->id
        )->where(
            'jenis_berkas',
            'foto'
        )->value('file');

        // Cek apakah sudah upload
        if (
            $this->kk_lama ||
            $this->akta_lama ||
            $this->ktp_lama ||
            $this->foto_lama
        ) {
            $this->sudahUpload = true;
        }
    }
}

    public function simpan()
    {
        $this->validate([
            'kk' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'akta' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'ktp' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'foto' => 'required|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        $pendaftar = Pendaftar::where('user_id', Auth::id())->first();
        if (!$pendaftar) {
            session()->flash(
                'error',
                'Isi form pendaftaran dulu'
            );
            return;
        }

        // Upload ke PUBLIC (ini yang penting!)
        $kkPath = $this->kk->store('berkas', 'public');
        $aktaPath = $this->akta->store('berkas', 'public');
        $ktpPath = $this->ktp->store('berkas', 'public');
        $fotoPath = $this->foto->store('berkas', 'public');

        if ($this->kk) {
            if ($this->kk_lama) {
                Storage::disk('public')->delete($this->kk_lama);
            }

            Berkas::updateOrCreate(
                [
                    'pendaftar_id' => $pendaftar->id,
                    'jenis_berkas' => 'kk',
                ],
                [
                    'file' => $kkPath,
                    'status_berkas' => 'pending',
                    'catatan_admin' => null,
                ]
            );
        }
        
        if ($this->akta) {
            if ($this->akta_lama) {
                Storage::disk('public')->delete($this->akta_lama);
            }

            Berkas::updateOrCreate(
                [
                    'pendaftar_id' => $pendaftar->id,
                    'jenis_berkas' => 'akta',
                ],
                [
                    'file' => $aktaPath,
                    'status_berkas' => 'pending',
                    'catatan_admin' => null,
                ]
            );
        }

        if ($this->ktp) {
            if ($this->ktp_lama) {
                Storage::disk('public')->delete($this->ktp_lama);
            }

            Berkas::updateOrCreate(
                [
                    'pendaftar_id' => $pendaftar->id,
                    'jenis_berkas' => 'ktp',
                ],
                [
                    'file' => $ktpPath,
                    'status_berkas' => 'pending',
                    'catatan_admin' => null,
                ]
            );
        }

        if ($this->foto) {
            if ($this->foto_lama) {
                Storage::disk('public')->delete($this->foto_lama);
            }

            Berkas::updateOrCreate(
                [
                    'pendaftar_id' => $pendaftar->id,
                    'jenis_berkas' => 'foto',
                ],
                [
                    'file' => $fotoPath,
                    'status_berkas' => 'pending',
                    'catatan_admin' => null,
                ]
            );
        }

        session()->flash(
            'success',
            'Berkas berhasil diperbarui'
        );

        $rules = [];

    foreach ($this->berkas as $item) {
        $field = $item->jenis_berkas; // kk, akta, ktp, foto

        // Jika belum ada file ATAU status ditolak
        if (!$item->file || $item->status_berkas === 'ditolak') {
            if ($field === 'foto') {
                $rules[$field] = 'required|file|mimes:jpg,jpeg,png|max:2048';
            } else {
                $rules[$field] = 'required|file|mimes:pdf,jpg,jpeg,png|max:2048';
            }
        } else {
            // Jika valid/pending → opsional
            if ($field === 'foto') {
                $rules[$field] = 'nullable|file|mimes:jpg,jpeg,png|max:2048';
            } else {
                $rules[$field] = 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048';
            }
        }
    }

    $this->validate($rules);

        $this->reset();

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.upload-berkas');
    }
}