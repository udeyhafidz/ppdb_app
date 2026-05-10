<?php

namespace App\Filament\Resources\Pendaftars\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class PendaftarsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                    ->label('Nama user')
                    ->sortable(),
                TextColumn::make('gelombang.nama_gelombang')
                    ->label('Gelombang')
                    ->sortable(),
                TextColumn::make('no_pendaftaran')
                    ->searchable(),
                TextColumn::make('nama_siswa')
                    ->searchable(),
                TextColumn::make('nisn')
                    ->searchable(),
                TextColumn::make('nik')
                    ->searchable(),
                TextColumn::make('tmp_lahir')
                    ->searchable(),
                TextColumn::make('tgl_lahir')
                    ->date()
                    ->sortable(),
                TextColumn::make('jk_siswa')
                    ->badge()
                    ->colors([
                        'success' => 'L',
                        'warning' => 'P'
                    ]),
                TextColumn::make('agama_siswa')
                    ->badge(),
                TextColumn::make('alamat_siswa')
                    ->searchable(),
                TextColumn::make('anak_ke')
                    ->searchable(),
                TextColumn::make('jumlah_saudara')
                    ->searchable(),
                TextColumn::make('nama_ayah')
                    ->searchable(),
                TextColumn::make('kerja_ayah')
                    ->searchable(),
                TextColumn::make('nama_ibu')
                    ->searchable(),
                TextColumn::make('kerja_ibu')
                    ->searchable(),
                TextColumn::make('phone_ortu')
                    ->prefix('+62 ')
                    ->searchable(),
                TextColumn::make('status')
                    ->badge()
                    ->formatStateUsing(fn ($state) => match ($state) {
                        'pending' => 'Pending',
                        'verif' => 'Verif',
                        'diterima' => 'Diterima',
                        'ditolak' => 'Ditolak',
                        default => $state,
                    })
                    ->color(fn ($state) => match ($state) {
                        'pending' => 'warning',
                        'verif' => 'gray',
                        'diterima' => 'success',
                        'ditolak' => 'danger',
                        'default' => 'gray',
                    }),
                TextColumn::make('status_ulang')
                    ->badge()
                     ->formatStateUsing(fn ($state) => match ($state) {
                        'belum' => 'Belum',
                        'pending' => 'Pending',
                        'valid' => 'Valid',
                        'ditolak' => 'Ditolak',
                        default => $state,
                    })
                    ->color(fn ($state) => match ($state) {
                        'belum' => 'gray',
                        'pending' => 'warning',
                        'valid' => 'success',
                        'ditolak' => 'danger',
                        'default' => 'gray',
                    }),
                TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
