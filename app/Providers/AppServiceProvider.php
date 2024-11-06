<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Repositories\Register\RegisterInterface; 
use App\Repositories\Register\RegisterRepository;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Login\LoginInterface; 
use App\Repositories\Login\LoginRepository;
use App\Repositories\Category\CategoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
        $this->app->bind(RegisterInterface::class, RegisterRepository::class);
        $this->app->bind(LoginInterface::class, LoginRepository::class);
        $this->app->bind(CategoryInterface::class, CategoryRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
