<?php

use App\Http\Controllers\ThreadPageController;
use Illuminate\Support\Facades\Route;

// Top Page
Route::get('/', \App\Http\Controllers\TopPageController::class)
->name('topPage');

Route::post('/createThread', \App\Http\Controllers\CreateThreadController::class)
->name('createThread');

// Thread Page
Route::get('/threads/{threadId}', \App\Http\Controllers\ThreadPageController::class)
->name('threadPage');

Route::post('/createComment', \App\Http\Controllers\CreateCommentController::class)
->name('createComment');