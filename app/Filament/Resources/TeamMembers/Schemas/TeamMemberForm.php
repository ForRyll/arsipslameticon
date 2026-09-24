<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class TeamMemberForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('position_id')
                    ->label('Jabatan')
                    ->relationship('position', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('name')
                    ->label('Nama Lengkap')
                    ->required()
                    ->maxLength(255),

                TextInput::make('last_education')
                    ->label('Pendidikan Terakhir')
                    ->placeholder('Contoh: S1 Teknik Informatika')
                    ->maxLength(255),

                TextInput::make('display_order')
                    ->label('Urutan Tampilan')
                    ->numeric()
                    ->default(0)
                    ->required()
                    ->minValue(0)
                    ->helperText('Semakin kecil nilainya, semakin atas posisi tampilannya.'),

                FileUpload::make('photo_url')
                    ->label('Foto Profil')
                    ->image()
                    ->imageEditor()
                    ->avatar()
                    ->directory('team-members')
                    ->disk('public')
                    ->maxSize(2048)
                    ->nullable(),

                Textarea::make('about')
                    ->label('Tentang')
                    ->rows(4)
                    ->columnSpanFull(),

                Textarea::make('quote')
                    ->label('Kata-kata / Quote')
                    ->rows(3)
                    ->columnSpanFull(),

                Section::make('Media Sosial')
                    ->description('Tautan ke akun media sosial anggota tim')
                    ->schema([
                        TextInput::make('instagram_url')
                            ->label('Instagram URL')
                            ->url()
                            ->prefix('https://')
                            ->placeholder('instagram.com/username')
                            ->maxLength(255),

                        TextInput::make('facebook_url')
                            ->label('Facebook URL')
                            ->url()
                            ->prefix('https://')
                            ->placeholder('facebook.com/username')
                            ->maxLength(255),

                        TextInput::make('x_url')
                            ->label('X (Twitter) URL')
                            ->url()
                            ->prefix('https://')
                            ->placeholder('x.com/username')
                            ->maxLength(255),
                    ])
                    ->columns(3)
                    ->columnSpanFull(),
            ]);
    }
}