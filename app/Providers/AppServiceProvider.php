<?php

namespace App\Providers;

use App\Repository\ProductRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('App\Repository\IProductRepository','App\Repository\ProductRepository');
        $this->app->bind('App\Repository\IAdminRepository','App\Repository\AdminRepository');
       // $this->app->bind('App\Repository\IClientRepository','App\Repository\ClientRepository');

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
