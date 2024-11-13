<?php

namespace App\Providers;

use App\Http\Middleware\CheckUserRole;
use Illuminate\Support\ServiceProvider;

class MiddlewareServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->router->aliasMiddleware('check.role', CheckUserRole::class);
    }
}
