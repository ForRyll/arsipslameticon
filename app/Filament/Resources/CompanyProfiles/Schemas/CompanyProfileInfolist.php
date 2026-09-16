<?php

namespace App\Filament\Resources\CompanyProfiles\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CompanyProfileInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id')
                    ->label('ID'),
                TextEntry::make('name'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('vision')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('mission')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('address')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('whatsapp')
                    ->placeholder('-'),
                ImageEntry::make('logo_url')
                    ->label('clients/logos'),
                TextEntry::make('description')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('ig_url')
                    ->placeholder('-'),
                TextEntry::make('tiktok_url')
                    ->placeholder('-'),
                TextEntry::make('tagline')
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
