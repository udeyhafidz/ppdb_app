<?php

namespace App\Filament\Resources\JadwalPpdbs\Pages;

use App\Filament\Resources\JadwalPpdbs\JadwalPpdbResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJadwalPpdbs extends ListRecords
{
    protected static string $resource = JadwalPpdbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
