<?php

namespace App\Livewire;

use App\Models\Gelombang;
use App\Models\Pendaftar;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.auth')]
class FormDaftar extends Component
{
    public $nama_siswa;
    public $nik;
    public $nisn;
    public $tmp_lahir;
    public $tgl_lahir;
    public $jk_siswa;
    public $agama_siswa;
    public $alamat_siswa;
    public $anak_ke;
    public $jumlah_saudara;

    public $nama_ayah;
    public $kerja_ayah;
    public $nama_ibu;
    public $kerja_ibu;
    public $phone_ortu;

    public function mount()
    {
        $gelombang = Gelombang::where('status_gelombang', 'valid')
            ->whereDate('tgl_mulai', '<=', now())
            ->whereDate('tgl_selesai', '>=', now())
            ->first();

        if (!$gelombang) {

            session()->flash(
                'error',
                'Pendaftaran tidak tersedia atau sudah ditutup.'
            );

            return redirect()->route('home');
        }
    }

    public function simpan()
    {
        // 🔴 CEK GELOMBANG DULU
        $gelombang = Gelombang::where('status_gelombang', 'valid')
            ->first();

        if (!$gelombang) {

            session()->flash(
                'error',
                'Gelombang belum tersedia.'
            );

            return;
        }

        $today = Carbon::today();

        // ⏳ BELUM MULAI
        if ($today < $gelombang->tgl_mulai) {

            session()->flash(
                'warning',
                '⏳ Pendaftaran belum dibuka.'
            );

            return;
        }

        // ❌ SUDAH SELESAI
        if ($today > $gelombang->tgl_selesai) {

            session()->flash(
                'error',
                '❌ Pendaftaran sudah ditutup.'
            );

            return;
        }

        // VALIDASI
        $this->validate([
            'nama_siswa' => 'required',
            'nik' => 'required|numeric|digits:16|unique:pendaftars,nik',
            'nisn' => 'required|numeric|digits:10|unique:pendaftars,nisn',
            'tmp_lahir' => 'required',
            'tgl_lahir' => [
                'required',
                'date',
                'before_or_equal:' . now()->subYears(7)->format('Y-m-d'), // minim
                'after_or_equal:' . now()->subYears(12)->format('Y-m-d'), // maks
            ],                  
            'jk_siswa' => 'required',
            'agama_siswa' => 'required',
            'anak_ke' => 'required',
            'jumlah_saudara' => 'required',
            'alamat_siswa' => 'required',

            'nama_ayah' => 'required',
            'kerja_ayah' => 'required',
            'nama_ibu' => 'required',
            'kerja_ibu' => 'required',
            'phone_ortu' => 'required',
        ]);

        // Cek apakah sudah pernah daftar
        // $cek = Pendaftar::where(
        //     'user_id', auth()->id())->first();

        //     if ($cek) {

        //     session()->flash(
        //         'error',
        //         'Anda sudah pernah melakukan pendaftaran.'
        //     );

        //     return;
        // }

        $gelombang = Gelombang::where('status_gelombang', 'valid')->first();

        if (!$gelombang) {
            session()->flash(
                'error',
                'Pendaftaran sedang ditutup.'
            );
            return;
        }
        // SIMPAN DATA
        Pendaftar::create([
            'user_id' => auth()->id(),
            'gelombang_id' => $gelombang->id,

            'nama_siswa' => $this->nama_siswa,
            'nik' => $this->nik,
            'nisn' => $this->nisn,
            'tmp_lahir' => $this->tmp_lahir,
            'tgl_lahir' => $this->tgl_lahir,
            'jk_siswa' => $this->jk_siswa,
            'agama_siswa' => $this->agama_siswa,
            'anak_ke' => $this->anak_ke,
            'jumlah_saudara' => $this->jumlah_saudara,
            'alamat_siswa' => $this->alamat_siswa,

            'nama_ayah' => $this->nama_ayah,
            'kerja_ayah' => $this->kerja_ayah,
            'nama_ibu' => $this->nama_ibu,
            'kerja_ibu' => $this->kerja_ibu,
            'phone_ortu' => $this->phone_ortu,
        ]);

        session()->flash('success', 'Pendaftaran berhasil!');

        return redirect()->route('home');

        $this->reset();
    }

    public function render()
    {
        $pendaftar = Pendaftar::where('user_id', auth()->id())->first();

        $gelombang = Gelombang::where(
            'status_gelombang',
            'valid'
        )->first();

        // Jika tidak ada gelombang valid
        if (!$gelombang) {

            session()->flash(
                'error',
                'Pendaftaran belum dibuka.'
            );

            return redirect('home');
        }

        return view('livewire.form-daftar', [
            'gelombang' => $gelombang,
            'pendaftar' => $pendaftar,
        ]);
    }
}