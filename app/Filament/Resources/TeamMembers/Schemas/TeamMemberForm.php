<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\FileUpload;
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

                FileUpload::make('photo_url')
                    ->label('Foto Profil')
                    ->image()
                    ->imageEditor()
                    ->avatar()
                    ->directory('team-members')
                    ->disk('public')
                    ->maxSize(2048)
                    ->nullable(),

                Textarea::make('bio')
                    ->label('Bio Singkat')
                    ->rows(3)
                    ->columnSpanFull(),

                Textarea::make('about')
                    ->label('Tentang')
                    ->rows(4)
                    ->columnSpanFull(),

                Textarea::make('quote')
                    ->label('Kata-kata / Quote')
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}