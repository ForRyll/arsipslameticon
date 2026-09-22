<?php

namespace App\Filament\Resources\Clients\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;

class ClientInfolist
{
    public static function configure(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('id')
                    ->label('ID'),

                TextEntry::make('name')
                    ->label('Nama Client'),

                ImageEntry::make('logo_url')
                    ->label('Logo Client')
                    ->disk('public'),

                TextEntry::make('website_url')
                    ->label('Website URL')
                    ->placeholder('-'),

                TextEntry::make('display_url')
                    ->label('Display URL')
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