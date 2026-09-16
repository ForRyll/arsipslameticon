<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                Select::make('client_id')
                    ->relationship('client', 'name'),
                TextInput::make('name')
                    ->required(),
                TextInput::make('display_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('link_url')
                    ->url(),
<<<<<<< HEAD
=======
<<<<<<< HEAD
                 FileUpload::make('img_url')
                    ->image()
                    ->directory('products/images')
                    ->imageEditor()
                    ->required(),
=======
>>>>>>> bbc16f7
                
                // Ganti TextInput 'img_url' jadi FileUpload ini
                FileUpload::make('img_url')
                    ->label('Gambar Produk')
                    ->image()
                    ->directory('products')
                    ->disk('public')
                    ->maxSize(2048),
<<<<<<< HEAD
=======
>>>>>>> 33759cc (Perbaikan schemas n tables)
>>>>>>> bbc16f7
            ]);
    }
}