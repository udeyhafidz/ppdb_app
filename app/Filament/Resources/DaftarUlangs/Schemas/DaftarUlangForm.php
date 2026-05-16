<?php

namespace App\Filament\Resources\DaftarUlangs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class DaftarUlangForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('pendaftar_id')
                    ->relationship('pendaftar', 'nama_siswa')
                    ->required()
                    ->disabled()
                    ->dehydrated(false),
                Select::make('jenis_berkas')
                    ->options([
                        'kk'    => 'Kartu Keluarga',
                        'akta'  => 'Akte Kelahiran',
                        'ktp'    => 'KTP Orang tua',
                        'foto'    => 'Foto Anak',
                    ])
                    ->required()
                    ->disabled()
                    ->dehydrated(false),
                FileUpload::make('file')
                    ->disk('local')
                    ->directory('berkas')
                    ->acceptedFileTypes([
                        'application/pdf',
                        'image/jpeg',
                        'image/png',
                    ])
                    ->maxSize(2048)
                    ->required()
                    ->disabled()
                    ->dehydrated(false),
            ]);
    }
}
