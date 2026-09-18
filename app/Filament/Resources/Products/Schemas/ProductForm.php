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
                    ->label('Kategori Produk')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                Select::make('client_id')
                    ->label('Klien')
                    ->relationship('client', 'name')
                    ->searchable()
                    ->preload()
                    ->nullable(),

                TextInput::make('name')
                    ->label('Nama Produk')
                    ->required(),

                TextInput::make('sub_name')
                    ->label('Sub Nama / Subtitle')
                    ->placeholder('Contoh: Sistem Informasi Manajemen Desa')
                    ->nullable(),

                TextInput::make('display_order')
                    ->label('Urutan Tampilan')
                    ->required()
                    ->numeric()
                    ->default(0),

                TextInput::make('link_url')
                    ->label('Link URL')
                    ->url()
                    ->placeholder('https://example.com'),

                FileUpload::make('img_url')
                    ->label('Gambar Produk')
                    ->image()
                    ->directory('products')
                    ->disk('public')
                    ->maxSize(2048)
                    ->columnSpanFull(),

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->columnSpanFull(),
            ]);
    }
}