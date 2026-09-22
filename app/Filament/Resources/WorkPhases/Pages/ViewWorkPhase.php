<?php

namespace App\Filament\Resources\WorkPhases\Pages;

use App\Filament\Resources\WorkPhases\WorkPhaseResource;
use Filament\Actions\EditAction;
use Filament\Actions\LocaleSwitcher;
use Filament\Resources\Pages\ViewRecord;

class ViewWorkPhase extends ViewRecord
{
    use ViewRecord\Concerns\Translatable;

    protected static string $resource = WorkPhaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
            EditAction::make(),
        ];
    }
}