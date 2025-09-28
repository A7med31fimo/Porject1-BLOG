<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LikeController;
Route::get('/', function () {
    return view('welcome');
});

// Auth Routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::post('/logout',[AuthController::class ,'logout'])->name('logout');
});
Route::get('/posts/edit_user_info', [AuthController::class, 'editUserInfo'])->name('user.edit_user_info')->middleware('auth');
Route::put('/user/{user}', [AuthController::class, 'updateUserInfo'])->name('user.update_user')->middleware('auth');

// 1- Index Route
Route::get('/posts', [PostController::class, 'index'])->name('posts.index')->middleware('auth');
// 2- Create Route
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create')->middleware('auth');
// 3- Edit Route
Route::get('/posts/{post}/edit',[PostController::class, 'edit'])->name('posts.edit')->middleware('auth');
// 4- storing Route
Route::post('/posts',[PostController::class,'store'])->name('posts.store')->middleware('auth');
// 5- searching method
Route::get('/posts/search',[PostController::class,'search'])->name('posts.search')->middleware('auth');
// 6- show single Post Route
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show')->middleware('auth');
// 7- Update Route
Route::put('/posts/{post}',[PostController::class,'update'])->name('posts.update')->middleware('auth');
// 8- Delete Post Route
Route::delete('/posts/{post}',[PostController::class,'destroy'])->name('posts.destroy')->middleware('auth');


// Like and Unlike Routes
Route::post('/posts/{post}/like', [LikeController::class, 'store'])->name('posts.like')->middleware('auth');
Route::delete('/posts/{post}/like', [LikeController::class, 'destroy'])->name('posts.unlike')->middleware('auth');
// 1- define a new route for user. #Done
// 2- define a controller which render a view. #Done
// 3- define view which contain posts. #Done
// 4- remove any static html data.#Done