<?php

namespace App\Filament\Resources\CompanyProfiles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CompanyProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                Textarea::make('vision')
                    ->columnSpanFull(),
                Textarea::make('mission')
                    ->columnSpanFull(),
                Textarea::make('address')
                    ->columnSpanFull(),
                TextInput::make('whatsapp'),

                // Mengubah TextInput logo_url menjadi FileUpload
                FileUpload::make('logo_url')
                    ->label('Logo Perusahaan')
                    ->image()
                    ->directory('company-profile')
                    ->disk('public')
                    ->maxSize(2048)
                    ->nullable(),

                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('ig_url')
                    ->url(),
                TextInput::make('tiktok_url')
                    ->url(),
                TextInput::make('tagline'),
            ]);
    }
}