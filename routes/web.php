<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('page1-landing');
});

Route::get('/movies', function () {
    return view('page2-movies');
});

Route::get('/booking', function () {
    return view('page3-booking');
});

Route::get('/pizza', function () {
    return view('page4-pizza');
});

Route::get('/map', function () {
    return view('page5-map');
});
