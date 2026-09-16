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
                FileUpload::make('logo_url')
                    ->image()
                    ->directory('clients/logos')
                    ->imageEditor()
                    ->required(),
                TextInput::make('website_url')
                    ->url(),
                TextInput::make('display_url')
                    ->url(),
            ]);
        }
}
