<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'GuestController@index') -> name('emp-index');

Route::get('/emp/delete/{id}', 'LoggedController@delete') -> name('emp-delete');

Route::get('/emp/edit/{id}', 'LoggedController@edit') -> name('emp-edit');
Route::post('/emp/edit/{id}', 'LoggedController@update') -> name('emp-update');

Route::get('/emp/{id}', 'GuestController@show') -> name('emp-show');
