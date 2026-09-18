<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id')
                    ->label('ID'),

                ImageEntry::make('img_url')
                    ->label('Gambar Produk')
                    ->disk('public'),

                TextEntry::make('name')
                    ->label('Nama Produk'),

                TextEntry::make('sub_name')
                    ->label('Sub Nama')
                    ->placeholder('-'),

                TextEntry::make('category.name')
                    ->label('Kategori'),

                TextEntry::make('client.name')
                    ->label('Klien')
                    ->placeholder('-'),

                TextEntry::make('display_order')
                    ->label('Urutan Tampilan')
                    ->numeric(),

                TextEntry::make('link_url')
                    ->label('Link URL')
                    ->placeholder('-'),

                TextEntry::make('description')
                    ->label('Deskripsi')
                    ->placeholder('-')
                    ->columnSpanFull(),

                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),

                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}