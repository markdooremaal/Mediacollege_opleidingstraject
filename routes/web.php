<?php

/*
|-----------
| Web Routes
|-----------
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
    return view('fase.2');
});

Route::get('/fase/3', function () {
    return view('fase.3');
});

Route::get('/fase/4', function () {
    return view('fase.4');
});

Route::get('/fase/5', function () {
    return view('fase.5');
});



