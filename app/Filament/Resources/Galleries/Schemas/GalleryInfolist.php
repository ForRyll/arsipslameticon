<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;

class GalleryInfolist
{
    public static function configure(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('id')
                    ->label('ID'),

                TextEntry::make('category.name')
                    ->label('Kategori'),

                TextEntry::make('title')
                    ->label('Judul'),

                TextEntry::make('display_order')
                    ->label('Urutan Tampil')
                    ->numeric(),

                ImageEntry::make('img_url')
                    ->label('Gambar')
                    ->disk('public'),

                TextEntry::make('caption')
                    ->label('Keterangan / Caption')
                    ->placeholder('-')
                    ->columnSpanFull(),

                TextEntry::make('created_at')
                    ->label('Waktu Dibuat')
                    ->dateTime('d M Y, H:i')
                    ->placeholder('-'),

                TextEntry::make('updated_at')
                    ->label('Terakhir Diperbarui')
                    ->dateTime('d M Y, H:i')
                    ->placeholder('-'),
            ]);
    }
}