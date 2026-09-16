<?php

namespace App\Filament\Resources\NewsCategories\Schemas;

use App\Models\NewsCategory;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class NewsCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Kategori')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $operation, $state, Set $set) => 
                        $operation === 'create' ? $set('slug', Str::slug($state)) : null
                    )
                    ->columnSpanFull(),

                TextInput::make('slug')
                    ->label('Slug URL')
                    ->required()
                    ->readOnly()
                    ->maxLength(255)
                    ->unique(NewsCategory::class, 'slug', ignoreRecord: true)
                    ->columnSpanFull(),
            ]);
    }
}