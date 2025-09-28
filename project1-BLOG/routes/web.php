<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Route::get('/', function () {
    return view('welcome');
});
// 1- Index Route
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// 2- Create Route
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// 3- Edit Route
Route::get('/posts/{post}/edit',[PostController::class, 'edit'])->name('posts.edit');
// 4- storing Route
Route::post('/posts',[PostController::class,'store'])->name('posts.store');
// 5- show single Post Route
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
// 6- Update Route
Route::put('/posts/{post}',[PostController::class,'update'])->name('posts.update');
// 7- Delete Post Route
Route::delete('/posts/{post}',[PostController::class,'destroy'])->name('posts.destroy');
// 1- define a new route for user. #Done
// 2- define a controller which render a view. #Done
// 3- define view which contain posts. #Done
// 4- remove any static html data.#Done