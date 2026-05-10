<?php

namespace App\Filament\Resources\Pengumumens;

use App\Filament\Resources\Pengumumens\Pages\CreatePengumumen;
use App\Filament\Resources\Pengumumens\Pages\EditPengumumen;
use App\Filament\Resources\Pengumumens\Pages\ListPengumumens;
use App\Filament\Resources\Pengumumens\Schemas\PengumumenForm;
use App\Filament\Resources\Pengumumens\Tables\PengumumensTable;
use App\Models\Pengumumen;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengumumenResource extends Resource
{
    protected static ?string $model = Pengumumen::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Pengumumen';

    public static function form(Schema $schema): Schema
    {
        return PengumumenForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PengumumensTable::configure($table);
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
            'index' => ListPengumumens::route('/'),
            'create' => CreatePengumumen::route('/create'),
            'edit' => EditPengumumen::route('/{record}/edit'),
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
