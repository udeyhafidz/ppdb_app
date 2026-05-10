<?php

namespace App\Filament\Resources\Sekolahs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SekolahForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('logo_sekolah')
                    ->directory('sekolah')
                    ->acceptedFileTypes([
                        'application/pdf',
                        'image/jpeg',
                        'image/png',
                    ])
                    ->maxSize(2048)
                    ->required(),
                TextInput::make('nama_sekolah')
                    ->required(),
                TextInput::make('alamat_sekolah')
                    ->default(null),
                TextInput::make('phone_sekolah')
                    ->tel()
                    ->numeric()
                    ->default(null),
                TextInput::make('email_sekolah')
                    ->email()
                    ->default(null),
            ]);
    }
}
