<?php

namespace App\Providers;

use App\Repositories\Store\StoreEloquentORM;
use App\Repositories\Store\StoreRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(StoreRepositoryInterface::class, StoreEloquentORM::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
