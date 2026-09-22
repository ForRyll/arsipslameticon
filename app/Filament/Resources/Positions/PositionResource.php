<?php

namespace App\Filament\Resources\Positions;

use App\Filament\Resources\Positions\Pages\CreatePosition;
use App\Filament\Resources\Positions\Pages\EditPosition;
use App\Filament\Resources\Positions\Pages\ListPositions;
use App\Filament\Resources\Positions\Pages\ViewPosition;
use App\Filament\Resources\Positions\Schemas\PositionForm;
use App\Filament\Resources\Positions\Schemas\PositionInfolist;
use App\Filament\Resources\Positions\Tables\PositionsTable;
use App\Models\Position;
use Filament\Forms\Form;
use Filament\Infolists\Infolist;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class PositionResource extends Resource
{
    use Translatable;

    protected static ?string $model = Position::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return PositionForm::configure($form);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return PositionInfolist::configure($infolist);
    }

    public static function table(Table $table): Table
    {
        return PositionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListPositions::route('/'),
            'create' => CreatePosition::route('/create'),
            'view'   => ViewPosition::route('/{record}'),
            'edit'   => EditPosition::route('/{record}/edit'),
        ];
    }
}