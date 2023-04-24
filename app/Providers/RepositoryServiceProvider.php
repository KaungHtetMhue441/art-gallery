<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ArtGallery\Blogs\Repositories\BlogRepository;
use App\ArtGallery\Users\Repositories\UserRepository;
use App\ArtGallery\Artists\Repositories\ArtistsRepository;
use App\ArtGallery\ArtWorks\Repositories\ArtWorksRepository;
use App\ArtGallery\Exhibitions\Repositories\ExhibitionRepository;
use App\ArtGallery\Blogs\Repositories\interfaces\BlogRepositoryInterface;
use App\ArtGallery\Users\Repositories\Interfaces\UserRepositoryInterface;
use App\ArtGallery\Artists\Repositories\interfaces\ArtistsRepositoryInterface;
use App\ArtGallery\ArtistTypes\Repositories\ArtistTypeRepository;
use App\ArtGallery\ArtistTypes\Repositories\interfaces\ArtistTypeRepositoryInterface;
use App\ArtGallery\ArtWorkCategories\Repositories\ArtWorkCategoryRepository;
use App\ArtGallery\ArtWorkCategories\Repositories\interfaces\ArtWorkCategoryRepositoryInterface;
use App\ArtGallery\ArtWorkMaterial\Repositories\ArtWorkMaterialRepository;
use App\ArtGallery\ArtWorkMaterial\Repositories\interfaces\ArtWorkMaterialRepositoryInterface;
use App\ArtGallery\ArtWorkMedium\Repositories\ArtWorkMediumRepository;
use App\ArtGallery\ArtWorkMedium\Repositories\interfaces\ArtWorkMediumRepositoryInterface;
use App\ArtGallery\ArtWorks\Repositories\interfaces\ArtWorksRepositoryInterface;
use App\ArtGallery\Exhibitions\Repositories\interfaces\ExhibitionsRepositoryInterface;
use App\ArtGallery\ImageSlider\Repositories\ImageSliderRepository;
use App\ArtGallery\ImageSlider\Repositories\interfaces\ImageSliderRepositoryInterface;

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

        //For ImageSlider
        $this->app->bind(
            ImageSliderRepositoryInterface::class,
            ImageSliderRepository::class
        );

        //For ArtistTypes
        $this->app->bind(
            ArtistTypeRepositoryInterface::class,
            ArtistTypeRepository::class
        );

        //For ArtworkCategory
        $this->app->bind(
            ArtWorkCategoryRepositoryInterface::class,
            ArtWorkCategoryRepository::class
        );

        //For ArtworkMedium
        $this->app->bind(
            ArtWorkMediumRepositoryInterface::class,
            ArtWorkMediumRepository::class
        );

        //For ArtworkMaterial
        $this->app->bind(
            ArtWorkMaterialRepositoryInterface::class,
            ArtWorkMaterialRepository::class
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
