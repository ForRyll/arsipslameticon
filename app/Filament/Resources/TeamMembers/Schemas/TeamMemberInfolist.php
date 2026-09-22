<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;

class TeamMemberInfolist
{
    public static function configure(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('id')
                    ->label('ID'),

                ImageEntry::make('photo_url')
                    ->label('Foto Profil')
                    ->disk('public')
                    ->circular(),

                TextEntry::make('name')
                    ->label('Nama Lengkap'),

                TextEntry::make('position.name')
                    ->label('Jabatan'),

                TextEntry::make('last_education')
                    ->label('Pendidikan Terakhir')
                    ->placeholder('-'),

                TextEntry::make('bio')
                    ->label('Bio Singkat')
                    ->placeholder('-')
                    ->columnSpanFull(),

                TextEntry::make('about')
                    ->label('Tentang')
                    ->placeholder('-')
                    ->columnSpanFull(),

                TextEntry::make('quote')
                    ->label('Kata-kata / Quote')
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