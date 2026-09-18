<?php

namespace App\Filament\Resources\ChooseUs\Pages;

use App\Filament\Resources\ChooseUs\ChooseUsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListChooseUs extends ListRecords
{
    protected static string $resource = ChooseUsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
