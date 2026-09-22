<?php

namespace App\Filament\Resources\News\Pages;

use App\Filament\Resources\News\NewsResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\LocaleSwitcher; // <-- Import ini
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditNews extends EditRecord
{
    use EditRecord\Concerns\Translatable; // <-- Pasang trait di sini

    protected static string $resource = NewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(), // <-- Tambahkan switcher di sini
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}