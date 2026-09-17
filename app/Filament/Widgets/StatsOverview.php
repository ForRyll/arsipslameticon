<?php

namespace App\Filament\Widgets;

use App\Models\Client;
use App\Models\JobApplication;
use App\Models\News;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Staf / Users', User::count())
                ->description('User terdaftar')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('info'),

            Stat::make('Total Berita', News::count())
                ->description('Artikel terpublikasi')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('success'),

            Stat::make('Lamaran Masuk', JobApplication::count())
                ->description('Pelamar kerja')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('warning'),

            Stat::make('Total Clients', Client::count())
                ->description('Mitra terhubung')
                ->descriptionIcon('heroicon-m-building-office')
                ->color('primary'),
        ];
    }
}