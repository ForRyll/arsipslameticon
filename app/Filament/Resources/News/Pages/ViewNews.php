<?php

namespace App\Filament\Resources\News\Pages;

use App\Filament\Resources\News\NewsResource;
use Filament\Actions\EditAction;
use Filament\Actions\LocaleSwitcher; // <-- Import ini
use Filament\Resources\Pages\ViewRecord;

class ViewNews extends ViewRecord
{
    use ViewRecord\Concerns\Translatable; // <-- Pasang trait di sini

    protected static string $resource = NewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(), // <-- Tambahkan switcher di sini
            EditAction::make(),
        ];
    }
}