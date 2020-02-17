<?php

Route::get('get-cars-by-brand/{brand}', 'RdwController@getCarsByBrand');
Route::get('get-cars-by-date/{date}', 'RdwController@getCarsByDate');
Route::get('get-ten-cars', 'RdwController@getTenCars')->name('get-ten-cars');
Route::get('overview/{id}', 'RdwController@show')->name('overview');
Route::get('date/{date}/brand/{brand}', 'RdwController@allTables');

Route::get('/', 'RdwController@index');

Route::get('create', 'UserController@create')->name('create');
Route::post('store', 'UserController@store')->name('store');

Route::get('opslaan', 'RdwController@store');
