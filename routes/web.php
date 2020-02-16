<?php

Route::get('get-cars-by-brand/{brand}', 'RdwController@getCarsByBrand');
Route::get('get-cars-by-date/{date}', 'RdwController@getCarsByDate');
Route::get('get-ten-cars', 'RdwController@getTenCars')->name('get-ten-cars');
Route::get('overview/{id}', 'RdwController@show')->name('overview');

Route::get('opslaan', 'RdwController@store');

Route::get('date/{date}/brand/{brand}', 'RdwController@index');
