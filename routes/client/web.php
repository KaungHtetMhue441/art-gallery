<?php
//implement client route here

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\Client')->group(function () {

    Route::controller(HomePageController::class)->group(function () {
        Route::get('/', 'index')->name('home');
        Route::post("/search", 'search')->name('home.search');
    });

    Route::controller(ArtWorkPageController::class)->prefix('art-works')->name('artWorks.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{artwork}', 'show')->name('show');
    });

    Route::controller(ArtistPageController::class)->prefix('artists')->name('artists.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{artist}', 'show')->name('show');
    });

    Route::controller(ExhibitionPageController::class)->prefix('exhibitions')->name('exhibitions.')->group(function () {
        Route::get('/', 'index')->name('index');
    });

    Route::controller(BlogPageController::class)->prefix('blogs')->name('blogs.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{slug}', 'show')->name('show');
    });
});

Route::view('/contact', 'pages/client/contact')->name('contact');
Route::view('/about', 'pages/client/about')->name('about');
