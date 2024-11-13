<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/setic', function () {
    return view('setic');
});

Route::get('/desarrollo', function () {
    return view('desarrollo');
});
