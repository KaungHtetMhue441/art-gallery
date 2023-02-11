<?php
//implement client route here

use App\Http\Controllers\Client\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TestController::class, 'index'])->name('client.index');

Route::get('/artists', function() {
    return view('pages.client.artists.index');
})->name('client.artists');

Route::get('/artists/{id}', function() {
    return view('pages.client.artists.detail');
})->name('client.artists');

Route::get('/blogs', function() {
    return view('pages.client.blogs');
})->name('client.blogs');

Route::get('/exhibitions', function() {
    return view('pages.client.exhibitions');
})->name('client.exhibitions');

Route::get('/about', function() {
    return view('pages.client.about');
})->name('client.about');