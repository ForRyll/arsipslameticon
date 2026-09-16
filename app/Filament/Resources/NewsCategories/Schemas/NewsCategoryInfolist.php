<?php

namespace App\Filament\Resources\NewsCategories\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class NewsCategoryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')
                    ->label('Nama Kategori')
                    ->columnSpanFull(),

                TextEntry::make('slug')
                    ->label('Slug URL'),

                TextEntry::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->dateTime('d M Y H:i'),
            ]);
    }
}