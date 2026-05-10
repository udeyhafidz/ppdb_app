<?php

namespace App\Filament\Resources\JadwalPpdbs\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class JadwalPpdbForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kegiatan')
                    ->required(),
                DatePicker::make('tgl_mulai')
                    ->required(),
                DatePicker::make('tgl_selesai')
                    ->required(),
                TextInput::make('keterangan')
                    ->default(null),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
