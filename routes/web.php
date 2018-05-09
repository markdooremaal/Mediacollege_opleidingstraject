<?php

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

// Index Route
Route::get('/', function () {
    return view('leerjaar.main');
});

// Fases Routes
Route::get('/fase/1', function () {
    return view('fase.1');
});

Route::get('/fase/2', function () {
    echo "fase2";
});

Route::get('/fase/3', function () {
    echo "fase3";
});

Route::get('/fase/4', function () {
    echo "fase4";
});

Route::get('/fase/5', function () {
    echo "fase5";
});



