<?php
//implement admin route here

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\Admin\ArtWorkController;
use App\Http\Controllers\Admin\ExhibitionController;

Route::get('/', [TestController::class, 'index'])->name('admin.index');

Route::namespace('App\Http\Controllers\Admin')->name('admin.')->group(function()
{
    Route::controller(ArtistsController::class)->name('articles.')->group(function()
    {
        Route::get('artists','index')->name('index');

    });

    Route::controller(ArtWorkController::class)->name('artwork.')->group(function()
    {
        Route::get('artworks','index')->name('index');
    });

    Route::controller(ExhibitionController::class)->name('exhibition.')->group(function()
    {
        Route::get('exhibitions','index')->name('index');
    });
});
