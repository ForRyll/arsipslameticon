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
use Filament\Forms\Form;
use Filament\Infolists\Infolist;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class WorkPhaseResource extends Resource
{
    use Translatable;

    protected static ?string $model = WorkPhase::class;

    protected static ?string $navigationIcon = 'heroicon-o-queue-list';

    protected static ?string $navigationLabel = 'Fase Kerja';

    protected static ?string $modelLabel = 'Fase Kerja';

    protected static ?string $pluralModelLabel = 'Fase Kerja';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form): Form
    {
        return WorkPhaseForm::configure($form);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return WorkPhaseInfolist::configure($infolist);
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