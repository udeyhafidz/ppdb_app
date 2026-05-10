<?php

namespace App\Filament\Resources\DaftarUlangs;

use App\Filament\Resources\DaftarUlangs\Pages\CreateDaftarUlang;
use App\Filament\Resources\DaftarUlangs\Pages\EditDaftarUlang;
use App\Filament\Resources\DaftarUlangs\Pages\ListDaftarUlangs;
use App\Filament\Resources\DaftarUlangs\Schemas\DaftarUlangForm;
use App\Filament\Resources\DaftarUlangs\Tables\DaftarUlangsTable;
use App\Models\DaftarUlang;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DaftarUlangResource extends Resource
{
    protected static ?string $model = DaftarUlang::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'DaftarUlang';

    public static function form(Schema $schema): Schema
    {
        return DaftarUlangForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DaftarUlangsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDaftarUlangs::route('/'),
            'create' => CreateDaftarUlang::route('/create'),
            'edit' => EditDaftarUlang::route('/{record}/edit'),
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
