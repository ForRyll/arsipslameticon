<?php

namespace App\Providers;

use App\Http\Responses\LogoutResponse;
use App\Models\User;
use Filament\Http\Responses\Auth\Contracts\LogoutResponse as LogoutResponseContract;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Bind Custom Logout Response Filament agar mengarah ke '/'
        $this->app->bind(LogoutResponseContract::class, LogoutResponse::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Intersept seluruh pengecekan Gate menggunakan helper hasPermission() di model User
        Gate::before(function (User $user, string $ability) {
            if ($user->hasPermission($ability)) {
                return true;
            }
        });
    }
}