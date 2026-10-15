<?php

namespace App\Providers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     * old way add for old laravel versions
     */
    public function boot(): void
    {
    Route::get('/admin', function () {
            return 'صفحة الأدمن';
        });
    }
}
