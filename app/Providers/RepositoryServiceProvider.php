<?php

namespace App\Providers;

use App\ArtGallery\Artists\Repositories\interfaces\ArtistsRepositoryInterface;
use App\ArtGallery\Artists\Repositories\ArtistsRepository;
use App\ArtGallery\ArtWorks\Repositories\ArtWorksRepository;
use App\ArtGallery\ArtWorks\Repositories\interfaces\ArtWorksRepositoryInterface;
use App\ArtGallery\Users\Repositories\Interfaces\UserRepositoryInterface;
use App\ArtGallery\Users\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );

        //For Artists
        $this->app->bind(
            ArtistsRepositoryInterface::class,
            ArtistsRepository::class
        );

        //For ArtWorks
        $this->app->bind(
            ArtWorksRepositoryInterface::class,
            ArtWorksRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
