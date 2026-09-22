<?php

namespace App\Filament\Resources\JobOpenings\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class JobOpeningForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Judul Posisi / Lowongan')
                    ->required()
                    ->maxLength(255),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'draft' => 'Draft',
                        'open' => 'Open',
                        'closed' => 'Closed',
                        'archived' => 'Archived',
                    ])
                    ->default('draft')
                    ->required(),

                TextInput::make('department')
                    ->label('Departemen / Divisi')
                    ->maxLength(255),

                Select::make('job_type')
                    ->label('Tipe Pekerjaan')
                    ->options([
                        'Full-time' => 'Full-time',
                        'Part-time' => 'Part-time',
                        'Contract' => 'Contract',
                        'Internship' => 'Internship',
                        'Remote' => 'Remote',
                    ])
                    ->searchable(),

                TextInput::make('location')
                    ->label('Lokasi')
                    ->placeholder('contoh: Jakarta / Remote')
                    ->maxLength(255),

                RichEditor::make('description')
                    ->label('Deskripsi Pekerjaan')
                    ->columnSpanFull(),

                RichEditor::make('requirements')
                    ->label('Persyaratan / Kualifikasi')
                    ->columnSpanFull(),
            ]);
    }
}