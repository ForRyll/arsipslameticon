<?php

namespace App\Filament\Resources\News\Pages;

use App\Filament\Resources\News\NewsResource;
use Filament\Actions\LocaleSwitcher; // <-- Import ini
use Filament\Resources\Pages\CreateRecord;

class CreateNews extends CreateRecord
{
    use CreateRecord\Concerns\Translatable; // <-- Pasang trait di sini

    protected static string $resource = NewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(), // <-- Tambahkan switcher di sini
        ];
    }
}