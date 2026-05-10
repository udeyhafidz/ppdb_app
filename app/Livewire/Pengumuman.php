<?php

namespace App\Livewire;

use App\Models\Pengumumen;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Pengumuman extends Component
{
    public $pengumuman;

    public function mount() {
        $this->pengumuman = Pengumumen::where('is_active', true)
            ->latest()
            ->get();
    }

    public function render()
    {
        return view('livewire.pengumuman');
    }
}