<?php

namespace App\Filament\Resources\Berkas\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class BerkasForm
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
                    ->directory('berkas')
                    ->disk('public')
                    ->acceptedFileTypes([
                        'application/pdf',
                        'image/jpeg',
                        'image/jpg',
                        'image/png',
                    ])
                    ->maxSize(2048)
                    ->required()
                    ->disabled()
                    ->dehydrated(false),
                Select::make('status_berkas')
                    ->options([
                        'pending' => 'Pending',
                        'valid' => 'Valid',
                        'ditolak' => 'Ditolak',
                    ]),
                Textarea::make('catatan_admin')
                    ->label('Catatan admin')
                    ->rows(3)
                    ->visible(fn (callable $get) => $get('status_berkas') === 'ditolak'),
            ]);
    }
}
