<?php

namespace App\Filament\Resources\Berkas;

use App\Filament\Resources\Berkas\Pages\CreateBerkas;
use App\Filament\Resources\Berkas\Pages\EditBerkas;
use App\Filament\Resources\Berkas\Pages\ListBerkas;
use App\Filament\Resources\Berkas\Schemas\BerkasForm;
use App\Filament\Resources\Berkas\Tables\BerkasTable;
use App\Models\Berkas;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BerkasResource extends Resource
{
    protected static ?string $model = Berkas::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Berkas';

    public static function form(Schema $schema): Schema
    {
        return BerkasForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BerkasTable::configure($table);
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
            'index' => ListBerkas::route('/'),
            'create' => CreateBerkas::route('/create'),
            'edit' => EditBerkas::route('/{record}/edit'),
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
