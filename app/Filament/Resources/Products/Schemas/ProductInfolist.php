<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id')
                    ->label('ID'),
                TextEntry::make('category.name')
                    ->label('Category'),
                TextEntry::make('client.name')
                    ->label('Client')
                    ->placeholder('-'),
                TextEntry::make('name'),
                TextEntry::make('display_order')
                    ->numeric(),
                TextEntry::make('description')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('link_url')
                    ->placeholder('-'),
                ImageEntry::make('img_url')
                    ->label('product/image'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
