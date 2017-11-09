<?php

Route::get('/', function () {
    return view('inicio');
});
Route::get('/inicio', function () {
    return view('inicio');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
