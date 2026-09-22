<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class ContactForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama')
                    ->required()
                    ->maxLength(255),

                TextInput::make('email')
                    ->label('Email Address')
                    ->email()
                    ->required()
                    ->maxLength(255),

                TextInput::make('phone')
                    ->label('Nomor Telepon')
                    ->tel()
                    ->maxLength(255),

                TextInput::make('subject')
                    ->label('Subjek')
                    ->required()
                    ->maxLength(255),

                Textarea::make('message')
                    ->label('Pesan')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull(),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'unread'   => 'Unread',
                        'read'     => 'Read',
                        'replied'  => 'Replied',
                        'archived' => 'Archived',
                    ])
                    ->default('unread')
                    ->required(),

                DateTimePicker::make('submitted_at')
                    ->label('Tanggal Pengiriman')
                    ->default(now())
                    ->required(),
            ]);
    }
}