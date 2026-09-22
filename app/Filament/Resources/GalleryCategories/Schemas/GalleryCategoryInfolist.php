<?php

namespace App\Filament\Resources\GalleryCategories\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;

class GalleryCategoryInfolist
{
    public static function configure(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('id')
                    ->label('ID'),

                TextEntry::make('name')
                    ->label('Nama Kategori'),

                TextEntry::make('slug')
                    ->label('Slug'),

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