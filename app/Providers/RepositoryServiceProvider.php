<?php

namespace App\Providers;

use App\Repositories\FlickrRepository;
use App\Repositories\FlickrRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind( FlickrRepositoryInterface::class, FlickrRepository::class);
    }
}
