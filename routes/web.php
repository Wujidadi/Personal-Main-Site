<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front;
use App\Http\Controllers\Developing;

Route::get('/', [Front\HomeController::class, 'Index'])->name('home');

Route::group(['prefix' => 'test'], function()
{
    Route::get('/', [Developing\TestController::class, 'Main']);
});
