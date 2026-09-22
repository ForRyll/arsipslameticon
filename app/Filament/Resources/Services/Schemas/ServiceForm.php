<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class ServiceForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Judul Layanan')
                    ->required()
                    ->maxLength(255),

                TextInput::make('icon_url')
                    ->label('URL Ikon / Gambar')
                    ->url()
                    ->placeholder('https://example.com/icon.png')
                    ->maxLength(255),

                TextInput::make('display_order')
                    ->label('Urutan Tampilan')
                    ->required()
                    ->numeric()
                    ->default(0),

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }
}