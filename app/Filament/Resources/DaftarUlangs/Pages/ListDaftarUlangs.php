<?php

namespace App\Filament\Resources\DaftarUlangs\Pages;

use App\Filament\Resources\DaftarUlangs\DaftarUlangResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDaftarUlangs extends ListRecords
{
    protected static string $resource = DaftarUlangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
