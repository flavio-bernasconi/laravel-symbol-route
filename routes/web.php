<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/cube/number', 'myController@getNumbers');
Route::get('/cube/letter', 'myController@getLetters');
