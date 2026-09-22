<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;

class ContactInfolist
{
    public static function configure(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('id')
                    ->label('ID'),

                TextEntry::make('name')
                    ->label('Nama'),

                TextEntry::make('email')
                    ->label('Email Address'),

                TextEntry::make('phone')
                    ->label('Nomor Telepon')
                    ->placeholder('-'),

                TextEntry::make('subject')
                    ->label('Subjek'),

                TextEntry::make('message')
                    ->label('Pesan')
                    ->columnSpanFull(),

                TextEntry::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'unread'   => 'danger',
                        'read'     => 'info',
                        'replied'  => 'success',
                        'archived' => 'gray',
                        default    => 'gray',
                    }),

                TextEntry::make('submitted_at')
                    ->label('Tanggal Pengiriman')
                    ->dateTime('d M Y, H:i'),

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