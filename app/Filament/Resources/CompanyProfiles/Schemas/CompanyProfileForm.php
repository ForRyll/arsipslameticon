<?php

namespace App\Filament\Resources\CompanyProfiles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
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

                TextInput::make('tagline'),

                TextInput::make('founded_year')
                    ->label('Tahun Berdiri')
                    ->numeric()
                    ->length(4)
                    ->placeholder('2020'),

                Toggle::make('is_active')
                    ->label('Status Aktif')
                    ->default(true),

                FileUpload::make('logo_url')
                    ->label('Logo Perusahaan')
                    ->image()
                    ->directory('company-profile')
                    ->disk('public')
                    ->maxSize(2048)
                    ->nullable(),

                Textarea::make('vision')
                    ->columnSpanFull(),

                Textarea::make('mission')
                    ->columnSpanFull(),

                Textarea::make('description')
                    ->columnSpanFull(),

                // Field alamat utama (legacy/single text)
                Textarea::make('address')
                    ->label('Alamat Utama')
                    ->columnSpanFull(),

                // Field daftar alamat opsional (array/JSON)
                Repeater::make('addresses')
                    ->label('Daftar Alamat Cabang / Lengkap')
                    ->simple(
                        Textarea::make('address_item')
                            ->required()
                            ->rows(2)
                    )
                    ->addActionLabel('Tambah Alamat')
                    ->columnSpanFull(),

                TextInput::make('whatsapp'),

                TextInput::make('ig_url')
                    ->label('Instagram URL')
                    ->url(),

                TextInput::make('tiktok_url')
                    ->label('TikTok URL')
                    ->url(),

                TextInput::make('linkedin_url')
                    ->label('LinkedIn URL')
                    ->url(),
            ]);
    }
}