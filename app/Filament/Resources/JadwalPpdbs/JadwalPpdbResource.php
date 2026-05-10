<?php

namespace App\Filament\Resources\JadwalPpdbs;

use App\Filament\Resources\JadwalPpdbs\Pages\CreateJadwalPpdb;
use App\Filament\Resources\JadwalPpdbs\Pages\EditJadwalPpdb;
use App\Filament\Resources\JadwalPpdbs\Pages\ListJadwalPpdbs;
use App\Filament\Resources\JadwalPpdbs\Schemas\JadwalPpdbForm;
use App\Filament\Resources\JadwalPpdbs\Tables\JadwalPpdbsTable;
use App\Models\JadwalPpdb;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class JadwalPpdbResource extends Resource
{
    protected static ?string $model = JadwalPpdb::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'JadwalPpdb';

    public static function form(Schema $schema): Schema
    {
        return JadwalPpdbForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JadwalPpdbsTable::configure($table);
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
            'index' => ListJadwalPpdbs::route('/'),
            'create' => CreateJadwalPpdb::route('/create'),
            'edit' => EditJadwalPpdb::route('/{record}/edit'),
        ];
    }
}
