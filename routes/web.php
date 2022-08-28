<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

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