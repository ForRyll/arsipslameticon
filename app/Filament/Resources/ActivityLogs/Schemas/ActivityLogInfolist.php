<?php

namespace App\Filament\Resources\ActivityLogs\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;

class ActivityLogInfolist
{
    public static function configure(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('id')
                    ->label('ID Log'),
                TextEntry::make('user.name')
                    ->label('Pengguna')
                    ->placeholder('System / Bot'),
                TextEntry::make('action')
                    ->label('Aksi')
                    ->badge(),
                TextEntry::make('target_type')
                    ->label('Tipe Target')
                    ->placeholder('-'),
                TextEntry::make('target_id')
                    ->label('ID Target')
                    ->placeholder('-'),
                TextEntry::make('description')
                    ->label('Deskripsi')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->label('Waktu Dibuat')
                    ->dateTime('d M Y, H:i:s')
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->label('Waktu Diperbarui')
                    ->dateTime('d M Y, H:i:s')
                    ->placeholder('-'),
            ]);
    }
}