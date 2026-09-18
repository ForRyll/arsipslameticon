<?php

namespace App\Filament\Resources\WorkPhases\Pages;

use App\Filament\Resources\WorkPhases\WorkPhaseResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditWorkPhase extends EditRecord
{
    protected static string $resource = WorkPhaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
