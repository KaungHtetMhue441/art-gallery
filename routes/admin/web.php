<?php
//implement admin route here

use Illuminate\Support\Facades\Route;

//Admin Routes
Route::namespace('App\Http\Controllers\Admin')->name('admin.')->middleware('auth')->group(function()
{
    //temporary
    Route::get('/', function() {
        return view('pages.admin.index');
    })->name('index');

    Route::controller(AuthController::class)->name('auth.')->group(function()
    {
        Route::get('/login', 'login')->name('login')->withoutMiddleware('auth')->middleware('guest');
        Route::post('/login', 'store')->name('post')->withoutMiddleware('auth')->middleware('guest');
        Route::post('/logout', 'logout')->name('logout');
    });

    Route::controller(ArtistsController::class)->prefix('artists')->name('artists.')->group(function()
    {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/upate/{artist}','upate')->name('update');
    });

    Route::controller(ArtWorkController::class)->name('artwork.')->group(function()
    {
        Route::get('artworks','index')->name('index');
    });

    Route::controller(ExhibitionController::class)->prefix('exhibition')->name('exhibition.')->group(function()
    {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
    });
});
