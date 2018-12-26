<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/singer', 'SingerController@index')->name('singer');
Route::post('singer', 'SingerController@store')->name('singer');
Route::get('/group', 'GroupController@index')->name('group');
Route::get('/song', 'SongController@index')->name('song');
Route::get('/album', 'AlbumController@index')->name('album');
Route::get('/playlist', 'PlaylistController@index')->name('playlist');
