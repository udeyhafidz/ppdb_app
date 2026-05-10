<?php

namespace App\Filament\Resources\Pendaftars;

use App\Filament\Resources\Pendaftars\Pages\CreatePendaftar;
use App\Filament\Resources\Pendaftars\Pages\EditPendaftar;
use App\Filament\Resources\Pendaftars\Pages\ListPendaftars;
use App\Filament\Resources\Pendaftars\Schemas\PendaftarForm;
use App\Filament\Resources\Pendaftars\Tables\PendaftarsTable;
use App\Models\Pendaftar;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PendaftarResource extends Resource
{
    protected static ?string $model = Pendaftar::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Pendaftar';

    public static function form(Schema $schema): Schema
    {
        return PendaftarForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PendaftarsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            \App\Filament\Resources\Pendaftars\RelationManagers\BerkasRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPendaftars::route('/'),
            'create' => CreatePendaftar::route('/create'),
            'edit' => EditPendaftar::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
