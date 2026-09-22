<?php

namespace App\Filament\Resources\ChooseUs\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;

class ChooseUsForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Why Choose Us')
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul Point')
                            ->placeholder('Contoh: Tailored for Your Business')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Textarea::make('description')
                            ->label('Deskripsi Singkat')
                            ->placeholder('Contoh: Every business is unique. We develop customized strategies...')
                            ->rows(4)
                            ->columnSpanFull(),
                        TextInput::make('sort_order')
                            ->label('Urutan')
                            ->required()
                            ->numeric()
                            ->default(0),
                        Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->helperText('Aktifkan untuk menampilkan item ini di website')
                            ->default(true)
                            ->inline(false),
                    ])->columns(2),
            ]);
    }
}