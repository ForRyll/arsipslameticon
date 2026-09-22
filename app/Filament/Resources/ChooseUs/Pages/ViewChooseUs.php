<?php

namespace App\Filament\Resources\ChooseUs\Pages;

use App\Filament\Resources\ChooseUs\ChooseUsResource;
use Filament\Actions\EditAction;
use Filament\Actions\LocaleSwitcher;
use Filament\Resources\Pages\ViewRecord;

class ViewChooseUs extends ViewRecord
{
    use ViewRecord\Concerns\Translatable;

    protected static string $resource = ChooseUsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
            EditAction::make(),
        ];
    }
}