<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TvShowController;

Route::get('/index', function () {
    return view('search');
});

Route::get('/', [TvShowController::class,'search'])->name('/index');

