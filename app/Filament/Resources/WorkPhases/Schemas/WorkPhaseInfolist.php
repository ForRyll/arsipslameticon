<?php

namespace App\Filament\Resources\WorkPhases\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;

class WorkPhaseInfolist
{
    public static function configure(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('productCategory.name')
                    ->label('Kategori Produk')
                    ->badge(),

                TextEntry::make('phase_number')
                    ->label('No. Fase')
                    ->placeholder('-'),

                TextEntry::make('title')
                    ->label('Judul Fase'),

                TextEntry::make('display_order')
                    ->label('Urutan')
                    ->numeric(),

                TextEntry::make('description')
                    ->label('Deskripsi')
                    ->placeholder('-')
                    ->columnSpanFull(),

                TextEntry::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime('d M Y H:i')
                    ->placeholder('-'),

                TextEntry::make('updated_at')
                    ->label('Diperbarui Pada')
                    ->dateTime('d M Y H:i')
                    ->placeholder('-'),
            ]);
    }
}