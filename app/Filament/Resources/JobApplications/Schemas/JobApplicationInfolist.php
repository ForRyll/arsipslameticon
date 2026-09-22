<?php

namespace App\Filament\Resources\JobApplications\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;

class JobApplicationInfolist
{
    public static function configure(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('id')
                    ->label('ID'),

                TextEntry::make('jobOpening.title')
                    ->label('Lowongan Pekerjaan'),

                TextEntry::make('name')
                    ->label('Nama Pelamar'),

                TextEntry::make('email')
                    ->label('Email'),

                TextEntry::make('phone')
                    ->label('Nomor Telepon')
                    ->placeholder('-'),

                TextEntry::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'applied' => 'gray',
                        'screened' => 'info',
                        'interview_scheduled' => 'warning',
                        'job_offer_extended' => 'primary',
                        'accepted' => 'success',
                        'rejected' => 'danger',
                        default => 'gray',
                    }),

                TextEntry::make('cv_url')
                    ->label('Berkas CV')
                    ->formatStateUsing(fn ($state) => $state ? 'Unduh / Lihat CV' : '-')
                    ->url(fn ($record) => $record->cv_url ? asset('storage/' . $record->cv_url) : null, shouldOpenInNewTab: true)
                    ->color('primary'),

                TextEntry::make('applied_at')
                    ->label('Tanggal Pengajuan')
                    ->dateTime('d M Y, H:i'),

                TextEntry::make('cover_letter')
                    ->label('Surat Lamaran')
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