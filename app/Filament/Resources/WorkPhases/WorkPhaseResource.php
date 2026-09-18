<?php

namespace App\Filament\Resources\WorkPhases;

use App\Filament\Resources\WorkPhases\Pages\CreateWorkPhase;
use App\Filament\Resources\WorkPhases\Pages\EditWorkPhase;
use App\Filament\Resources\WorkPhases\Pages\ListWorkPhases;
use App\Filament\Resources\WorkPhases\Pages\ViewWorkPhase;
use App\Filament\Resources\WorkPhases\Schemas\WorkPhaseForm;
use App\Filament\Resources\WorkPhases\Schemas\WorkPhaseInfolist;
use App\Filament\Resources\WorkPhases\Tables\WorkPhasesTable;
use App\Models\WorkPhase;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class WorkPhaseResource extends Resource
{
    protected static ?string $model = WorkPhase::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedQueueList;

    protected static ?string $navigationLabel = 'Fase Kerja';

    protected static ?string $modelLabel = 'Fase Kerja';

    protected static ?string $pluralModelLabel = 'Fase Kerja';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return WorkPhaseForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return WorkPhaseInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WorkPhasesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListWorkPhases::route('/'),
            'create' => CreateWorkPhase::route('/create'),
            'view'   => ViewWorkPhase::route('/{record}'),
            'edit'   => EditWorkPhase::route('/{record}/edit'),
        ];
    }
}