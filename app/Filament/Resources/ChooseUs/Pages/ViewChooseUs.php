<?php

namespace App\Filament\Resources\ChooseUs\Pages;

use App\Filament\Resources\ChooseUs\ChooseUsResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewChooseUs extends ViewRecord
{
    protected static string $resource = ChooseUsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
