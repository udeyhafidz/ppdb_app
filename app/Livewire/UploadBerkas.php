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
        $pendaftar = Pendaftar::where('user_id', Auth::id())->first();

        if (!$pendaftar) {
            session()->flash('error', 'Isi form pendaftaran dulu');
            return;
        }

        // Ambil data berkas terbaru
        $this->berkas = Berkas::where(
        'pendaftar_id',
        $pendaftar->id
        )->get();

        $rules = [];
        $jenisBerkas = ['kk', 'akta', 'ktp', 'foto'];

        foreach ($jenisBerkas as $jenis) {
            $dataBerkas = $this->berkas->firstWhere(
                'jenis_berkas',
                $jenis
            );

            $required = !$dataBerkas || $dataBerkas->status_berkas === 'ditolak';

            if ($jenis === 'foto') {
                $rules[$jenis] =
                    ($required ? 'required' : 'nullable')
                    . '|file|mimes:jpg,jpeg,png|max:2048';
            } else {
                $rules[$jenis] =
                    ($required ? 'required' : 'nullable')
                    . '|file|mimes:pdf,jpg,jpeg,png|max:2048';
            }
        }

        $this->validate($rules);

        // Simpan file yang dipilih
        $this->simpanBerkas($pendaftar, 'kk', $this->kk, $this->kk_lama);
        $this->simpanBerkas($pendaftar, 'akta', $this->akta, $this->akta_lama);
        $this->simpanBerkas($pendaftar, 'ktp', $this->ktp, $this->ktp_lama);
        $this->simpanBerkas($pendaftar, 'foto', $this->foto, $this->foto_lama);

        session()->flash(
            'success',
            'Berkas berhasil diperbarui'
        );

        return redirect()->route('home');
    }

    private function simpanBerkas($pendaftar, $jenis, $file, $fileLama)
    {
        if (!$file) {
            return;
        }

        if ($fileLama) {
            Storage::disk('public')->delete($fileLama);
        }

        $path = $file->store('berkas', 'public');

        Berkas::updateOrCreate(
            [
                'pendaftar_id' => $pendaftar->id,
                'jenis_berkas' => $jenis,
            ],
            [
                'file' => $path,
                'status_berkas' => 'pending',
                'catatan_admin' => null,
            ]
        );
    }

    public function render()
    {
        return view('livewire.upload-berkas');
    }

}