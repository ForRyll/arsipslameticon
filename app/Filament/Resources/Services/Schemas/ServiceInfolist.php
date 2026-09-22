<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;

class ServiceInfolist
{
    public static function configure(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('id')
                    ->label('ID'),

                TextEntry::make('title')
                    ->label('Judul Layanan'),

                TextEntry::make('icon_url')
                    ->label('URL Ikon')
                    ->url(fn ($record) => $record->icon_url)
                    ->openUrlInNewTab()
                    ->placeholder('-'),

                TextEntry::make('display_order')
                    ->label('Urutan Tampilan')
                    ->numeric(),

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