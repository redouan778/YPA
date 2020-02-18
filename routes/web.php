<?php
//RdwController
Route::get('get-cars-by-brand/{brand}', 'RdwController@getCarsByBrand')->name('cars-by-brand');
Route::get('get-cars-by-date/{date}', 'RdwController@getCarsByDate')->name('cars-by-date');
Route::get('get-ten-cars', 'RdwController@getTenCars')->name('get-ten-cars');
Route::get('overview/{id}', 'RdwController@show')->name('overview');
Route::get('date/{date}/brand/{brand}', 'RdwController@allTables')->name('all-tables');

Route::get('/', 'RdwController@index')->name('/');
//UserController
Route::get('get-users', 'UserController@getUsers')->name('get-users')->middleware('user.db');
Route::get('create', 'UserController@create')->name('create');
Route::post('store', 'UserController@store')->name('store');
