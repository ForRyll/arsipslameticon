<?php

namespace App\Filament\Resources\ChooseUs\Pages;

use App\Filament\Resources\ChooseUs\ChooseUsResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditChooseUs extends EditRecord
{
    protected static string $resource = ChooseUsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
