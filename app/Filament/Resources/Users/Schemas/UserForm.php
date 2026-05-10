<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Hash;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->readonly(fn ($operation) => $operation === 'edit'),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required()
                    ->readonly(fn ($operation) => $operation === 'edit'),
                DateTimePicker::make('email_verified_at')
                    ->hidden(),
                TextInput::make('password')
                    ->password()
                    ->dehydrateStateUsing(fn ($state) => filled ($state)
                        ? Hash::make($state)
                        : null
                    )
                    ->dehydrated(fn ($state) => filled($state))
                    ->required(fn ($operation) => $operation === 'create')
                    ->readonly(fn ($operation) => $operation === 'edit'),
                Select::make('role')
                    ->options(['admin' => 'Admin', 'petugas' => 'Petugas', 'ortu' => 'Ortu'])
                    ->default('ortu')
                    ->required()
                    ->disabled(fn ($operation) => $operation === 'edit'),
                Toggle::make('is_active')
                    ->label('Aktifkan user')
                    ->default(false)
                    ->required(),
            ]);
    }
}
