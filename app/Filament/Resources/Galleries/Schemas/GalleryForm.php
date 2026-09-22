<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class GalleryForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category_id')
                    ->label('Kategori')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255),

                TextInput::make('display_order')
                    ->label('Urutan Tampil')
                    ->required()
                    ->numeric()
                    ->default(0),

                FileUpload::make('img_url')
                    ->label('Gambar')
                    ->image()
                    ->directory('gallery/image')
                    ->disk('public')
                    ->imageEditor()
                    ->required(),

                Textarea::make('caption')
                    ->label('Keterangan / Caption')
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}