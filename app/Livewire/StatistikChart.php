<?php

namespace App\Livewire;

use App\Models\Pendaftar;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class StatistikChart extends Component
{
    public int $totalPendaftar;
    public int $totalDiterima;
    public int $totalDitolak;

    public function mount()
    {
        // Total semua pendaftar
        $this->totalPendaftar =
            Pendaftar::count();

        // Status diterima
        $this->totalDiterima =
            Pendaftar::where(
                'status',
                'diterima'
            )->count();

        // Status ditolak
        $this->totalDitolak =
            Pendaftar::where(
                'status',
                'ditolak'
            )->count();
    }

    public function render()
    {
        return view(
            'livewire.statistik-chart'
        );
    }
}