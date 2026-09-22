<?php

namespace App\Filament\Resources\JobOpenings;

use App\Filament\Resources\JobOpenings\Pages\CreateJobOpening;
use App\Filament\Resources\JobOpenings\Pages\EditJobOpening;
use App\Filament\Resources\JobOpenings\Pages\ListJobOpenings;
use App\Filament\Resources\JobOpenings\Pages\ViewJobOpening;
use App\Filament\Resources\JobOpenings\Schemas\JobOpeningForm;
use App\Filament\Resources\JobOpenings\Schemas\JobOpeningInfolist;
use App\Filament\Resources\JobOpenings\Tables\JobOpeningsTable;
use App\Models\JobOpening;
use Filament\Forms\Form;
use Filament\Infolists\Infolist;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class JobOpeningResource extends Resource
{
    use Translatable;

    protected static ?string $model = JobOpening::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form): Form
    {
        return JobOpeningForm::configure($form);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return JobOpeningInfolist::configure($infolist);
    }

    public static function table(Table $table): Table
    {
        return JobOpeningsTable::configure($table);
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
            'index'  => ListJobOpenings::route('/'),
            'create' => CreateJobOpening::route('/create'),
            'view'   => ViewJobOpening::route('/{record}'),
            'edit'   => EditJobOpening::route('/{record}/edit'),
        ];
    }
}