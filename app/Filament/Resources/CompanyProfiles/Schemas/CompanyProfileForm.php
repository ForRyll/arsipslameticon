<?php

namespace App\Filament\Resources\CompanyProfiles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;

class CompanyProfileForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama Perusahaan')
                    ->required()
                    ->maxLength(255),

                TextInput::make('email')
                    ->label('Email Address')
                    ->email()
                    ->required()
                    ->maxLength(255),

                TextInput::make('tagline')
                    ->label('Tagline')
                    ->maxLength(255),

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

                Textarea::make('headline') // <--- Input Headline
                    ->label('Headline / Slogan Utama')
                    ->placeholder('Empowering businesses with cutting-edge digital solutions...')
                    ->rows(3)
                    ->columnSpanFull(),

                Textarea::make('vision')
                    ->label('Visi')
                    ->columnSpanFull(),

                Textarea::make('mission')
                    ->label('Misi')
                    ->columnSpanFull(),

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->columnSpanFull(),

                Textarea::make('address')
                    ->label('Alamat Utama')
                    ->columnSpanFull(),

                Repeater::make('addresses')
                    ->label('Daftar Alamat Cabang / Lengkap')
                    ->simple(
                        Textarea::make('address_item')
                            ->required()
                            ->rows(2)
                    )
                    ->addActionLabel('Tambah Alamat')
                    ->columnSpanFull(),

                TextInput::make('whatsapp')
                    ->label('Nomor WhatsApp')
                    ->maxLength(255),

                TextInput::make('ig_url')
                    ->label('Instagram URL')
                    ->url()
                    ->maxLength(255),

                TextInput::make('tiktok_url')
                    ->label('TikTok URL')
                    ->url()
                    ->maxLength(255),

                TextInput::make('linkedin_url')
                    ->label('LinkedIn URL')
                    ->url()
                    ->maxLength(255),
            ]);
    }
}