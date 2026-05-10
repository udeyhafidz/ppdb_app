<?php

namespace App\Filament\Resources\Gelombangs;

use App\Filament\Resources\Gelombangs\Pages\CreateGelombang;
use App\Filament\Resources\Gelombangs\Pages\EditGelombang;
use App\Filament\Resources\Gelombangs\Pages\ListGelombangs;
use App\Filament\Resources\Gelombangs\Schemas\GelombangForm;
use App\Filament\Resources\Gelombangs\Tables\GelombangsTable;
use App\Models\Gelombang;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GelombangResource extends Resource
{
    protected static ?string $model = Gelombang::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Gelombang';

    public static function form(Schema $schema): Schema
    {
        return GelombangForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GelombangsTable::configure($table);
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
            'index' => ListGelombangs::route('/'),
            'create' => CreateGelombang::route('/create'),
            'edit' => EditGelombang::route('/{record}/edit'),
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
