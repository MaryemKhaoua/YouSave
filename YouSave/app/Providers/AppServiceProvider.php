<?php

namespace App\Providers;

use App\Repositories\BloodRepository;
use App\Repositories\BloodRepositoryInterface;
use App\Services\BloodService;
use App\Services\BloodServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->bind(BloodServiceInterface::class, BloodService::class);
        $this->app->bind(BloodRepositoryInterface::class, BloodRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        //
    }
}