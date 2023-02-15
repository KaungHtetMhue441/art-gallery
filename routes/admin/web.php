<?php
//implement admin route here

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\Admin\ArtWorkController;
use App\Http\Controllers\Admin\ExhibitionController;

Route::get('/', [TestController::class, 'index'])->name('admin.index');

Route::namespace('App\Http\Controllers\Admin')->name('admin.')->group(function()
{
    Route::controller(ArtistsController::class)->prefix('artists')->name('artists.')->group(function()
    {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/{artist}/edit','edit')->name('edit');
        Route::put('/update/{artist}','update')->name('update');
        Route::delete('/{artist}/delete','delete')->name('delete');
    });

    Route::controller(ArtWorkController::class)->prefix('artwork')->name('artWork.')->group(function()
    {
        Route::get('/','index')->name('index');
    Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/{artWork}/edit','edit')->name('edit');
        Route::put('/update/{artWork}','update')->name('update');
        Route::delete('/{artWork}/delete','delete')->name('delete');
    });

    Route::controller(ExhibitionController::class)->prefix('exhibition')->name('exhibition.')->group(function()
    {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
    });
});
