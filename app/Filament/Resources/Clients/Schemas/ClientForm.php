<?php

namespace App\Filament\Resources\Clients\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class ClientForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama Client')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('logo_url')
                    ->label('Logo Client')
                    ->image()
                    ->directory('clients')
                    ->disk('public')
                    ->maxSize(2048)
                    ->nullable(),

                TextInput::make('website_url')
                    ->label('Website URL')
                    ->url()
                    ->maxLength(255),

                TextInput::make('display_url')
                    ->label('Display URL')
                    ->url()
                    ->maxLength(255),
            ]);
    }
}