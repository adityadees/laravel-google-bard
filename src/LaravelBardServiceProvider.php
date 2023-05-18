<?php

declare(strict_types=1);

namespace AdityaDees\LaravelBard;

use Illuminate\Support\ServiceProvider;

class LaravelBardServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/laravel-bard.php' => config_path('laravel-bard.php'),
        ], 'laravel-bard');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-bard.php', 'laravel-bard');
    }
}
