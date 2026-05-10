<?php

namespace App\Filament\Resources\Pengumumens\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PengumumenForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                TextInput::make('judul')
                    ->required(),
                Textarea::make('isi')
                    ->required(),
                DatePicker::make('tanggal')
                    ->required()
                    ->date(),
                Toggle::make('is_active')
                    ->required()
            ]);
    }
}
