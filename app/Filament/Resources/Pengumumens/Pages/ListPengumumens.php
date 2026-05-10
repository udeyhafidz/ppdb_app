<?php

namespace App\Filament\Resources\Pengumumens\Pages;

use App\Filament\Resources\Pengumumens\PengumumenResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPengumumens extends ListRecords
{
    protected static string $resource = PengumumenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
