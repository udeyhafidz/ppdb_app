<?php

namespace App\Filament\Resources\Gelombangs\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GelombangForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_gelombang')
                    ->required(),
                DatePicker::make('tgl_mulai')
                    ->required(),
                DatePicker::make('tgl_selesai')
                    ->required(),
                TextInput::make('kuota_gelombang')
                    ->required(),
                Select::make('status_gelombang')
                    ->options(['valid' => 'Valid', 'invalid' => 'Invalid'])
                    ->default('invalid')
                    ->required(),
            ]);
    }
}
