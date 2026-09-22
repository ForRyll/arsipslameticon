<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class SettingForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('key')
                    ->label('Kunci Pengaturan (Key)')
                    ->required()
                    ->maxLength(255)
                    ->disabledOn('edit'),

                Textarea::make('value')
                    ->label('Nilai (Value)')
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }
}