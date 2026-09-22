<?php

namespace App\Filament\Resources\NewsCategories\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;

class NewsCategoryInfolist
{
    public static function configure(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('name')
                    ->label('Nama Kategori')
                    ->columnSpanFull(),

                TextEntry::make('slug')
                    ->label('Slug URL'),

                TextEntry::make('news_count')
                    ->label('Jumlah Berita')
                    ->state(fn ($record) => $record->news()->count()),

                TextEntry::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->dateTime('d M Y H:i'),
            ]);
    }
}