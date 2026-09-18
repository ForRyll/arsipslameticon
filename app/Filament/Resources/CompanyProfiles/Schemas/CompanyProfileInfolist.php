<?php

namespace App\Filament\Resources\CompanyProfiles\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\RepeatableEntry;
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

                TextEntry::make('tagline')
                    ->placeholder('-'),

                TextEntry::make('founded_year')
                    ->label('Tahun Berdiri')
                    ->placeholder('-'),

                IconEntry::make('is_active')
                    ->label('Status Aktif')
                    ->boolean(),

                ImageEntry::make('logo_url')
                    ->label('Logo Perusahaan')
                    ->disk('public'),

                TextEntry::make('vision')
                    ->placeholder('-')
                    ->columnSpanFull(),

                TextEntry::make('mission')
                    ->placeholder('-')
                    ->columnSpanFull(),

                TextEntry::make('description')
                    ->placeholder('-')
                    ->columnSpanFull(),

                TextEntry::make('address')
                    ->label('Alamat Utama')
                    ->placeholder('-')
                    ->columnSpanFull(),

                RepeatableEntry::make('addresses')
                    ->label('Daftar Alamat Cabang')
                    ->schema([
                        TextEntry::make('')
                            ->placeholder('-'),
                    ])
                    ->columnSpanFull(),

                TextEntry::make('whatsapp')
                    ->placeholder('-'),

                TextEntry::make('ig_url')
                    ->label('Instagram URL')
                    ->placeholder('-'),

                TextEntry::make('tiktok_url')
                    ->label('TikTok URL')
                    ->placeholder('-'),

                TextEntry::make('linkedin_url')
                    ->label('LinkedIn URL')
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