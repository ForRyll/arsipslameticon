<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;

class ProductInfolist
{
    public static function configure(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
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
                    ->url(fn ($record) => $record->link_url)
                    ->openUrlInNewTab()
                    ->placeholder('-'),

                TextEntry::make('description')
                    ->label('Deskripsi')
                    ->placeholder('-')
                    ->columnSpanFull(),

                TextEntry::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->dateTime('d M Y H:i')
                    ->placeholder('-'),

                TextEntry::make('updated_at')
                    ->label('Terakhir Diperbarui')
                    ->dateTime('d M Y H:i')
                    ->placeholder('-'),
            ]);
    }
}