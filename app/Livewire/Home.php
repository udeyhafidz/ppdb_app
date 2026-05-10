<?php

namespace App\Livewire;

use App\Models\Gelombang;
use App\Models\Pendaftar;
use App\Models\Pengumumen;
use App\Models\Sekolah;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Home extends Component
{
    public $laki;
    public $perempuan;
    public $totalPendaftar;
    public $sekolah;
    public $diterima;
    public $ditolak;

    public $bisaDaftar;
    public $pendaftar;
    public $pengumuman;

    public function mount()
    {
        $gelombang = Gelombang::where('status_gelombang', 'valid')->first();

        $this->bisaDaftar = false;

        if ($gelombang) {

            if (now()->between(
                $gelombang->tgl_mulai,
                $gelombang->tgl_selesai
            )) {

                $this->bisaDaftar = true;

            }
        }

        $this->pengumuman = Pengumumen::where('is_active', true)
            ->latest()
            ->get();

        // ambil jumlah pendaftar
        $this->totalPendaftar = Pendaftar::count();

        // Pendaftar Laki-laki
        $this->laki = Pendaftar::where('jk_siswa', 'L')->count();

        // Pendaftar Laki-laki
        $this->perempuan = Pendaftar::where('jk_siswa', 'P')->count();

        $this->diterima = Pendaftar::where('status', 'diterima')->count();

        $this->ditolak = Pendaftar::where('status', 'ditolak')->count();

        $this->sekolah = Sekolah::first();

        // Ambil data pendaftar user login
        if (Auth::check()) {

            $this->pendaftar = Pendaftar::where(
                'user_id',
                Auth::id()
            )->first();
        }
    }

    public function cetakBukti()
{
    $pendaftar = Pendaftar::where('user_id', auth()->id())
        ->firstOrFail();

    // Hanya jika sudah valid
    if ($pendaftar->status != 'diterima' && $pendaftar->status_ulang != 'valid') {
        abort(403);
    }

    $pdf = Pdf::loadView(
        'livewire.pdf.bukti-diterima',
        compact('pendaftar')
    );

    return response()->streamDownload(
        fn () => print($pdf->output()),
        "bukti-diterima.pdf"
    );
}

    public function render()
    {
        return view('livewire.home');
    }
}