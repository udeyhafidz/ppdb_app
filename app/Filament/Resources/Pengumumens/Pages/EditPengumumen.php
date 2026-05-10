<?php

namespace App\Filament\Resources\Pengumumens\Pages;

use App\Filament\Resources\Pengumumens\PengumumenResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditPengumumen extends EditRecord
{
    protected static string $resource = PengumumenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
