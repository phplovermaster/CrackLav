<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Força HTTPS quando não estiver em localhost
        if (config('app.env') !== 'local' || str_contains(config('app.url'), 'github.dev')) {
            URL::forceScheme('https');
        }
    }
}