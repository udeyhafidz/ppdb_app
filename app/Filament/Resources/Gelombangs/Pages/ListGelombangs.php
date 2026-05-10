<?php

namespace App\Filament\Resources\Gelombangs\Pages;

use App\Filament\Resources\Gelombangs\GelombangResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGelombangs extends ListRecords
{
    protected static string $resource = GelombangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
