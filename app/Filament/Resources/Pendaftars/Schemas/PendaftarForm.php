<?php

namespace App\Filament\Resources\Pendaftars\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PendaftarForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required()
                    ->disabled(fn ($operation) => $operation === 'edit'),
                Select::make('gelombang_id')
                    ->relationship('gelombang', 'nama_gelombang')
                    ->required()
                    ->disabled(fn ($operation) => $operation === 'edit'),
                Repeater::make('Data Siswa')
                    ->components([
                        TextInput::make('nama_siswa')
                            ->required(),
                        TextInput::make('nisn')
                            ->default(null),
                        TextInput::make('nik')
                            ->required(),
                        TextInput::make('tmp_lahir')
                            ->required(),
                        DatePicker::make('tgl_lahir')
                            ->required(),
                        Select::make('jk_siswa')
                            ->options(['L' => 'Laki-laki', 'P' => 'Perempuan'])
                            ->required(),
                        Select::make('agama_siswa')
                            ->options([
                                'islam' => 'Islam',
                                'kristen' => 'Kristen',
                                'hindu' => 'Hindu',
                                'buddha' => 'Buddha',
                                'konghuchu' => 'Konghuchu',
                            ])
                            ->required(),
                        Textarea::make('alamat_siswa')
                            ->required(),
                        TextInput::make('anak_ke')
                            ->required(),
                        TextInput::make('jumlah_saudara')
                            ->required(),
                    ])->columns(3),
                Repeater::make('Data Ortu')
                    ->components([
                        TextInput::make('nama_ayah')
                            ->required(),
                        TextInput::make('kerja_ayah')
                            ->required(),
                        TextInput::make('nama_ibu')
                            ->required(),
                        TextInput::make('kerja_ibu')
                            ->required(),
                        TextInput::make('phone_ortu')
                            ->tel()
                            ->required(),
                    ])->columns(2),
                Select::make('status')
                    ->options(['pending' => 'Pending', 'diterima' => 'Diterima', 'ditolak' => 'Ditolak'])
                    ->default('pending')
                    ->required(),
                Select::make('status_ulang')
                    ->options(['belum' => 'Belum', 'pending' => 'Pending', 'valid' => 'Valid', 'ditolak' => 'Ditolak'])
                    ->default('belum')
                    ->required(),
                Textarea::make('pesan_admin')
                    ->label('Pesan untuk Orang Tua')
                    ->rows(3),
            ]);
    }
}
