<?php

namespace App\Filament\Widgets;

use App\Models\ActivityLog; // sesuaikan nama model log kamu
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestActivityLogs extends BaseWidget
{
    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                ActivityLog::query()->latest()->limit(5)
            )
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Waktu')
                    ->dateTime('d M Y, H:i'),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('User')
                    ->default('System'),
                Tables\Columns\TextColumn::make('action')
                    ->label('Aktivitas')
                    ->badge(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Keterangan'),
            ]);
    }
}