<?php

namespace App\Filament\Resources\WorkPhases\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class WorkPhaseForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('product_category_id')
                    ->label('Kategori Produk')
                    ->relationship('productCategory', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('title')
                    ->label('Judul Fase')
                    ->required()
                    ->maxLength(255),

                TextInput::make('display_order')
                    ->label('Urutan')
                    ->numeric()
                    ->placeholder('Otomatis jika dikosongkan'),

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }
}