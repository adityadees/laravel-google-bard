<?php

declare(strict_types=1);

namespace AdityaDees\LaravelGoogleBard;

use Illuminate\Support\ServiceProvider;

class LaravelGoogleBardServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/laravel-google-bard.php' => config_path('laravel-google-bard.php'),
        ], 'laravel-google-bard');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-google-bard.php', 'laravel-google-bard');
    }
}
