<?php

namespace App\Livewire\Pendaftar;

use Livewire\Component;
use App\Models\Pendaftar;
use Illuminate\Support\Carbon;

class EditData extends Component
{
    public $pendaftar;

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
        $this->pendaftar = Pendaftar::where(
            'user_id',
            auth()->id()
        )->first();

        if ($this->pendaftar) {

            $this->nama_siswa = $this->pendaftar->nama_siswa;
            $this->nik = $this->pendaftar->nik;
            $this->nisn = $this->pendaftar->nisn;
            $this->tmp_lahir = $this->pendaftar->tmp_lahir;
            $this->tgl_lahir = $this->pendaftar->tgl_lahir;
            $this->jk_siswa = $this->pendaftar->jk_siswa;
            $this->agama_siswa = $this->pendaftar->agama_siswa;
            $this->alamat_siswa = $this->pendaftar->alamat_siswa;
            $this->anak_ke = $this->pendaftar->anak_ke;
            $this->jumlah_saudara = $this->pendaftar->jumlah_saudara;
            $this->nama_ayah = $this->pendaftar->nama_ayah;
            $this->kerja_ayah = $this->pendaftar->kerja_ayah;
            $this->nama_ibu = $this->pendaftar->nama_ibu;
            $this->kerja_ibu = $this->pendaftar->kerja_ibu;
            $this->phone_ortu = $this->pendaftar->phone_ortu;

        }
    }

    public function update()
    {
        $this->validate([
            'nama_siswa' => 'required',
            'nik' => 'required|numeric|digits:16',
            'nisn' => 'required|numeric|digits:10',
            'tmp_lahir' => 'required',
            'tgl_lahir' => [
                'required',
                'date',
                'before_or_equal:' . Carbon::now()->subYears(7)->format('Y-m-d'),
                'after_or_equal:' . Carbon::now()->subYears(12)->format('Y-m-d'),
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
            'phone_ortu' => [
                'required',
                'numeric',
                'digits_between:9,13'
            ]
        ]);

        $this->pendaftar->update([

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
            'phone_ortu' => ltrim($this->phone_ortu, '0'),

        ]);

        session()->flash(
            'success',
            'Data berhasil diperbarui!'
        );

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.pendaftar.edit-data');
    }
}