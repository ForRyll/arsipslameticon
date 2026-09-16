<?php

namespace App\Filament\Resources\CompanyProfiles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
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
                FileUpload::make('logo_url')
                    ->image()
                    ->directory('company/logos')
                    ->imageEditor()
                    ->required(),
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
