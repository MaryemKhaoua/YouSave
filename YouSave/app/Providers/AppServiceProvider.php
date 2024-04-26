<?php

namespace App\Providers;

use App\Repositories\BloodRepository;
use App\Repositories\BloodRepositoryInterface;
use App\repositories\CommentRepository;
use App\repositories\IcommentRepository;
use App\repositories\IPostRepository;
use App\repositories\PostRepository;
use App\Services\BloodService;
use App\Services\BloodServiceInterface;
use Illuminate\Pagination\Paginator;
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
        $this->app->bind(IPostRepository::class, PostRepository::class);
        $this->app->bind(IcommentRepository::class, CommentRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}