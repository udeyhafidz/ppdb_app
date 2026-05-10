<?php

namespace App\Filament\Resources\JadwalPpdbs\Pages;

use App\Filament\Resources\JadwalPpdbs\JadwalPpdbResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditJadwalPpdb extends EditRecord
{
    protected static string $resource = JadwalPpdbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
