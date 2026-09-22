<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;

class UserInfolist
{
    public static function configure(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('id')
                    ->label('ID'),

                TextEntry::make('role.name')
                    ->label('Role')
                    ->badge(),

                TextEntry::make('name')
                    ->label('Nama Lengkap'),

                TextEntry::make('email')
                    ->label('Alamat Email'),

                TextEntry::make('email_verified_at')
                    ->label('Verifikasi Email')
                    ->dateTime('d M Y H:i')
                    ->placeholder('Belum Diverifikasi'),

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