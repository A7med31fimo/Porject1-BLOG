<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Page1', function () {
    return view('page1View');
});


// 1- define a new route for user.
// 2- define a controller which render a view.
// 3- define view which contain posts.
// 4- remove any static html data.