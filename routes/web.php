<?php

use Illuminate\Support\Facades\Route;

// Top Page
Route::get('/', \App\Http\Controllers\TopPageController::class)
->name('topPage');

Route::post('/createThread', \App\Http\Controllers\CreateThreadController::class)
->name('createThread');