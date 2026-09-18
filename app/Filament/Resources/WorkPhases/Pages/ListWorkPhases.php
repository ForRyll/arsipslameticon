<?php

namespace App\Filament\Resources\WorkPhases\Pages;

use App\Filament\Resources\WorkPhases\WorkPhaseResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWorkPhases extends ListRecords
{
    protected static string $resource = WorkPhaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
