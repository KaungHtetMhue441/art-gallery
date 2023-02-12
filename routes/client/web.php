<?php
//implement client route here

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\Client')->group(function() {

    Route::controller(HomePageController::class)->group(function() {
        Route::get('/', 'index')->name('home');
    });

    Route::controller(ArtWorkPageController::class)->prefix('art-works')->name('artWorks.')->group(function() {
        Route::get('/', 'index')->name('index');
    });

    Route::controller(ArtistPageController::class)->prefix('artists')->name('artists.')->group(function() {
        Route::get('/', 'index')->name('index');
        Route::get('/{id}', 'show')->name('show');
    });

    Route::controller(ExhibitionPageController::class)->prefix('exhibitions')->name('exhibitions.')->group(function() {
        Route::get('/', 'index')->name('index');
    });

    Route::controller(BlogPageController::class)->prefix('blogs')->name('blogs.')->group(function() {
        Route::get('/', 'index')->name('index');
        Route::get('/{slug}', 'show')->name('show');
    });

});