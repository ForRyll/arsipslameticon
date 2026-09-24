<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\Section;
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

                TextEntry::make('display_order')
                    ->label('Urutan Tampilan'),

                TextEntry::make('last_education')
                    ->label('Pendidikan Terakhir')
                    ->placeholder('-'),

                TextEntry::make('about')
                    ->label('Tentang')
                    ->placeholder('-')
                    ->columnSpanFull(),

                TextEntry::make('quote')
                    ->label('Kata-kata / Quote')
                    ->placeholder('-')
                    ->columnSpanFull(),

                Section::make('Media Sosial')
                    ->schema([
                        TextEntry::make('instagram_url')
                            ->label('Instagram')
                            ->url(fn ($record) => $record->instagram_url, true)
                            ->placeholder('-'),

                        TextEntry::make('facebook_url')
                            ->label('Facebook')
                            ->url(fn ($record) => $record->facebook_url, true)
                            ->placeholder('-'),

                        TextEntry::make('x_url')
                            ->label('X (Twitter)')
                            ->url(fn ($record) => $record->x_url, true)
                            ->placeholder('-'),
                    ])
                    ->columns(3)
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