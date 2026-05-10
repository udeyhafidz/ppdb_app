<?php

namespace App\Livewire;

use App\Models\JadwalPpdb;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Jadwal extends Component
{
    public $jadwal;

    public function mount()
    {
        $this->jadwal =
            JadwalPpdb::where(
                'is_active',
                true
            )
            ->orderBy(
                'tgl_mulai',
                'asc'
            )
            ->get();
    }

    public function render()
    {
        return view('livewire.jadwal');
    }
}