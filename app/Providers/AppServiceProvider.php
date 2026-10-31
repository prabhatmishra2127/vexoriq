<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
     */
    public function boot(): void
    {
        if (
            app()->environment('production') ||
            request()->header('x-forwarded-proto') === 'https' ||
            request()->server('HTTP_X_FORWARDED_PROTO') === 'https' ||
            str_contains(request()->getHost(), 'render.com')
        ) {
            URL::forceScheme('https');
        }
    }
}
