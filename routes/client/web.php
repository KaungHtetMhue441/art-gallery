<?php
//implement client route here

use App\Http\Controllers\Client\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TestController::class, 'index'])->name('client.index');
