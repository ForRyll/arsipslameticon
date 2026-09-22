<?php

namespace App\Filament\Resources\ChooseUs;

use App\Filament\Resources\ChooseUs\Pages\CreateChooseUs;
use App\Filament\Resources\ChooseUs\Pages\EditChooseUs;
use App\Filament\Resources\ChooseUs\Pages\ListChooseUs;
use App\Filament\Resources\ChooseUs\Pages\ViewChooseUs;
use App\Filament\Resources\ChooseUs\Schemas\ChooseUsForm;
use App\Filament\Resources\ChooseUs\Schemas\ChooseUsInfolist;
use App\Filament\Resources\ChooseUs\Tables\ChooseUsTable;
use App\Models\ChooseUs;
use Filament\Forms\Form;
use Filament\Infolists\Infolist;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class ChooseUsResource extends Resource
{
    use Translatable;

    protected static ?string $model = ChooseUs::class;

    protected static ?string $navigationIcon = 'heroicon-o-check-circle';

    protected static ?string $navigationLabel = 'Why Choose Us';

    protected static ?string $modelLabel = 'Why Choose Us';

    protected static ?string $pluralModelLabel = 'Why Choose Us';

    protected static ?int $navigationSort = 3;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form): Form
    {
        return ChooseUsForm::configure($form);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return ChooseUsInfolist::configure($infolist);
    }

    public static function table(Table $table): Table
    {
        return ChooseUsTable::configure($table);
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
            'index'  => ListChooseUs::route('/'),
            'create' => CreateChooseUs::route('/create'),
            'view'   => ViewChooseUs::route('/{record}'),
            'edit'   => EditChooseUs::route('/{record}/edit'),
        ];
    }
}