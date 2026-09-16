<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('position_id')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('photo_url')
                    ->url(),
                Textarea::make('bio')
                    ->columnSpanFull(),
            ]);
    }
}
