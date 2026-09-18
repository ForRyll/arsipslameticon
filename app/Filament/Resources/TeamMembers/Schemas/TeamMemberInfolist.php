<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TeamMemberInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id')
                    ->label('ID'),

                ImageEntry::make('photo_url')
                    ->label('Foto Profil')
                    ->disk('public'),

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
                    ->dateTime()
                    ->placeholder('-'),

                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}