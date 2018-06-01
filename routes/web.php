<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('organizer','OrganizerController');
Route::resource('pengantin','PengantinController');
Route::resource('keluarga','KeluargaController');
Route::resource('pesanan','PesananController');