<?php

namespace App\Filament\Resources\Clients\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ClientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),

                // Mengubah TextInput menjadi FileUpload untuk logo
                FileUpload::make('logo_url')
                    ->label('Logo Client')
                    ->image()
                    ->directory('clients')
                    ->disk('public')
                    ->maxSize(2048)
                    ->nullable(),

                TextInput::make('website_url')
                    ->url(),

                TextInput::make('display_url')
                    ->url(),
            ]);
    }
}