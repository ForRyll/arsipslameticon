<?php

namespace App\Filament\Resources\JobOpenings\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class JobOpeningForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                Select::make('status')
                    ->options(['draft' => 'Draft', 'open' => 'Open', 'closed' => 'Closed', 'archived' => 'Archived'])
                    ->default('draft')
                    ->required(),
                TextInput::make('location'),
                TextInput::make('job_type'),
                TextInput::make('department'),
                Textarea::make('requirements')
                    ->columnSpanFull(),
            ]);
    }
}
