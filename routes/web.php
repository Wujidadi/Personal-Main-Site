<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function()
{
    return TextResponse('張成崗個人網站');
});
