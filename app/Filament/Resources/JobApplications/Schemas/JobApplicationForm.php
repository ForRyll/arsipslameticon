<?php

namespace App\Filament\Resources\JobApplications\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class JobApplicationForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('job_opening_id')
                    ->label('Lowongan Pekerjaan')
                    ->relationship('jobOpening', 'title')
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('name')
                    ->label('Nama Lengkap')
                    ->required()
                    ->maxLength(255),

                TextInput::make('email')
                    ->label('Alamat Email')
                    ->email()
                    ->required()
                    ->maxLength(255),

                TextInput::make('phone')
                    ->label('Nomor Telepon')
                    ->tel()
                    ->maxLength(255),

                Select::make('status')
                    ->label('Status Lamaran')
                    ->options([
                        'applied' => 'Applied',
                        'screened' => 'Screened',
                        'interview_scheduled' => 'Interview Scheduled',
                        'job_offer_extended' => 'Job Offer Extended',
                        'accepted' => 'Accepted',
                        'rejected' => 'Rejected',
                    ])
                    ->default('applied')
                    ->required(),

                FileUpload::make('cv_url')
                    ->label('Berkas CV / Resume')
                    ->directory('job-applications/cvs')
                    ->acceptedFileTypes(['application/pdf'])
                    ->openable()
                    ->downloadable()
                    ->required(),

                DateTimePicker::make('applied_at')
                    ->label('Tanggal Pengajuan')
                    ->default(now())
                    ->required(),

                Textarea::make('cover_letter')
                    ->label('Surat Lamaran (Cover Letter)')
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }
}