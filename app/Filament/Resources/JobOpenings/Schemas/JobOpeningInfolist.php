<?php

namespace App\Filament\Resources\JobOpenings\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;

class JobOpeningInfolist
{
    public static function configure(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('id')
                    ->label('ID'),

                TextEntry::make('title')
                    ->label('Judul Posisi'),

                TextEntry::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'draft' => 'gray',
                        'open' => 'success',
                        'closed' => 'danger',
                        'archived' => 'warning',
                        default => 'gray',
                    }),

                TextEntry::make('department')
                    ->label('Departemen')
                    ->placeholder('-'),

                TextEntry::make('job_type')
                    ->label('Tipe Pekerjaan')
                    ->placeholder('-'),

                TextEntry::make('location')
                    ->label('Lokasi')
                    ->placeholder('-'),

                TextEntry::make('description')
                    ->label('Deskripsi Pekerjaan')
                    ->html()
                    ->placeholder('-')
                    ->columnSpanFull(),

                TextEntry::make('requirements')
                    ->label('Persyaratan')
                    ->html()
                    ->placeholder('-')
                    ->columnSpanFull(),

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