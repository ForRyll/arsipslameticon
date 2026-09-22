<?php

namespace App\Filament\Resources\CompanyProfiles\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;

class CompanyProfileInfolist
{
    public static function configure(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('id')
                    ->label('ID'),

                TextEntry::make('name')
                    ->label('Nama Perusahaan'),

                TextEntry::make('email')
                    ->label('Email Address'),

                TextEntry::make('tagline')
                    ->label('Tagline')
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
                    ->label('Visi')
                    ->placeholder('-')
                    ->columnSpanFull(),

                TextEntry::make('mission')
                    ->label('Misi')
                    ->placeholder('-')
                    ->columnSpanFull(),

                TextEntry::make('description')
                    ->label('Deskripsi')
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
                            ->hiddenLabel()
                            ->getStateUsing(fn ($state) => is_array($state) ? ($state['address_item'] ?? '-') : $state)
                            ->placeholder('-'),
                    ])
                    ->columnSpanFull(),

                TextEntry::make('whatsapp')
                    ->label('WhatsApp')
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