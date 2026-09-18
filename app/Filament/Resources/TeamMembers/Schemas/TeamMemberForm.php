<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('position_id')
                    ->label('Jabatan')
                    ->relationship('position', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('name')
                    ->label('Nama Lengkap')
                    ->required(),

                TextInput::make('last_education')
                    ->label('Pendidikan Terakhir')
                    ->placeholder('Contoh: S1 Teknik Informatika'),

                FileUpload::make('photo_url')
                    ->label('Foto Profil')
                    ->image()
                    ->directory('team-members')
                    ->disk('public')
                    ->maxSize(2048)
                    ->nullable(),

                Textarea::make('bio')
                    ->label('Bio Singkat')
                    ->columnSpanFull(),

                Textarea::make('about')
                    ->label('Tentang')
                    ->columnSpanFull(),

                Textarea::make('quote')
                    ->label('Kata-kata / Quote')
                    ->columnSpanFull(),
            ]);
    }
}