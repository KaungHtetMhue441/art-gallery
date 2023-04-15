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
        Route::get('/{artist}/edit','edit')->name('edit');
        Route::put('/update/{artist}','update')->name('update');
        Route::delete('/{artist}/delete','delete')->name('delete');
    });

    Route::controller(ArtWorkController::class)->prefix('artwork')->name('artwork.')->group(function()
    {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/{artWork}/edit','edit')->name('edit');
        Route::put('/update/{artWork}','update')->name('update');
        Route::delete('/{artWork}/delete','delete')->name('delete');
    });

    Route::controller(ExhibitionController::class)->prefix('exhibitions')->name('exhibitions.')->group(function()
    {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::get('/edit/{exhibition}','edit')->name('edit');
        Route::post('/store','store')->name('store');
        Route::get('/{exhibition}/edit','edit')->name('edit');
        Route::put('/update/{exhibition}','update')->name('update');
        Route::delete('/{exhibition}/delete','delete')->name('delete');
    });

    Route::controller(BlogController::class)->prefix('blog')->name('blog.')->group(function()
    {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        // Route::get('/{exhibition}/edit','edit')->name('edit');
        // Route::put('/update/{exhibition}','update')->name('update');
        // Route::delete('/{exhibition}/delete','delete')->name('delete');
    });

    Route::controller(ImageSliderController::class)->prefix('image-slider')->name('image-slider.')->group(function()
    {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::delete('/{id}/delete', 'destroy')->name('destroy');
    });

    Route::controller(ArtistTypeController::class)->prefix('artist-types')->name('artist-types.')->group(function()
    {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::delete('/{id}/delete', 'destroy')->name('destroy');
    });

    Route::controller(ArtWorkCategoryController::class)->prefix('artwork-categories')->name('artwork-categories.')->group(function()
    {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::delete('/{id}/delete', 'destroy')->name('destroy');
    });

    Route::controller(ArtWorkMediumController::class)->prefix('artwork-mediums')->name('artwork-mediums.')->group(function()
    {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::delete('/{id}/delete', 'destroy')->name('destroy');
    });

    Route::controller(ArtWorkMaterialController::class)->prefix('artwork-materials')->name('artwork-materials.')->group(function()
    {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::delete('/{id}/delete', 'destroy')->name('destroy');
    });
});
