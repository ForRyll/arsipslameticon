<?php

namespace App\Filament\Resources\JobApplications\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class JobApplicationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('job_opening_id')
                    ->relationship('jobOpening', 'title')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel(),
                Select::make('status')
                    ->options([
            'applied' => 'Applied',
            'screened' => 'Screened',
            'interview_scheduled' => 'Interview scheduled',
            'job_offer_extended' => 'Job offer extended',
            'accepted' => 'Accepted',
            'rejected' => 'Rejected',
        ])
                    ->default('applied')
                    ->required(),
                TextInput::make('cv_url')
                    ->url()
                    ->required(),
                Textarea::make('cover_letter')
                    ->columnSpanFull(),
                DateTimePicker::make('applied_at')
                    ->required(),
            ]);
    }
}
