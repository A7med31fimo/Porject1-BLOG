<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/{post_id}', [PostController::class, 'show'])->name('posts.show');

// 1- define a new route for user. okkkkk
// 2- define a controller which render a view. okkkkkkk
// 3- define view which contain posts. 
// 4- remove any static html data.