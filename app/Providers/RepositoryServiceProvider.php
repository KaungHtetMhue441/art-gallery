<?php

namespace App\Providers;

use BlogRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\ArtGallery\Blogs\Repositories\BlogRepository;
use App\ArtGallery\Users\Repositories\UserRepository;
use App\ArtGallery\Artists\Repositories\ArtistsRepository;
use App\ArtGallery\ArtWorks\Repositories\ArtWorksRepository;
use App\ArtGallery\Exhibitions\Repositories\ExhibitionRepository;
use App\ArtGallery\Users\Repositories\Interfaces\UserRepositoryInterface;
use App\ArtGallery\Artists\Repositories\interfaces\ArtistsRepositoryInterface;
use App\ArtGallery\ArtWorks\Repositories\interfaces\ArtWorksRepositoryInterface;
use App\ArtGallery\Exhibitions\Repositories\interfaces\ExhibitionsRepositoryInterface;

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

        //For Exhibition
        $this->app->bind(
            ExhibitionsRepositoryInterface::class,
            ExhibitionRepository::class
        );

        //For Blog
        $this->app->bind(
            BlogRepositoryInterface::class,
            BlogRepository::class
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
