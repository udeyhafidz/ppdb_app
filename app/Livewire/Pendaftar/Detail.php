<?php

namespace App\Livewire\Pendaftar;

use Livewire\Component;
use App\Models\Pendaftar;

class Detail extends Component
{
    public $pendaftar;

    public function mount()
    {
        $this->pendaftar = Pendaftar::where('user_id', auth()->id())->first();
    }

    public function render()
    {
        return view('livewire.pendaftar.detail-siswa');
    }
}