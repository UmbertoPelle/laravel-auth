<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'GuestController@index') -> name('emp-index');

Route::get('/emp/delete/{id}', 'LoggedController@delete') -> name('emp-delete');
Route::get('/emp/{id}', 'GuestController@show') -> name('emp-show');
