<?php

namespace App\Filament\Resources\ActivityLogs\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class ActivityLogForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                    ->label('Pengguna')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->preload()
                    ->nullable(),

                TextInput::make('action')
                    ->label('Aksi')
                    ->required()
                    ->maxLength(255),

                TextInput::make('target_type')
                    ->label('Tipe Target')
                    ->maxLength(255),

                TextInput::make('target_id')
                    ->label('ID Target')
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('Deskripsi Activity')
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }
}