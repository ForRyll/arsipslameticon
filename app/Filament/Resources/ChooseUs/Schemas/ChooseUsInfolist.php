<?php

namespace App\Filament\Resources\ChooseUs\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;

class ChooseUsInfolist
{
    public static function configure(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Detail Point')
                    ->schema([
                        TextEntry::make('id')
                            ->label('ID'),
                        TextEntry::make('title')
                            ->label('Judul Point')
                            ->weight('bold'),
                        TextEntry::make('sort_order')
                            ->label('Urutan Posisi'),
                        IconEntry::make('is_active')
                            ->label('Status Aktif')
                            ->boolean(),
                        TextEntry::make('description')
                            ->label('Deskripsi')
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
                    ])->columns(2),
            ]);
    }
}