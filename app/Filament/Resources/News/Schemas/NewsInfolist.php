<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;

class NewsInfolist
{
    public static function configure(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                ImageEntry::make('img_url')
                    ->label('Gambar Utama')
                    ->columnSpanFull(),

                TextEntry::make('title')
                    ->label('Judul Berita')
                    ->columnSpanFull(),

                TextEntry::make('slug')
                    ->label('Slug'),

                TextEntry::make('category.name')
                    ->label('Kategori'),

                TextEntry::make('author.name')
                    ->label('Penulis'),

                TextEntry::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->dateTime('d M Y H:i'),

                TextEntry::make('content')
                    ->label('Isi Berita')
                    ->html()
                    ->columnSpanFull(),
            ]);
    }
}