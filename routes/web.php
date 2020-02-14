<?php

Route::get('getcar/{brand}', 'RdwController@getCars');
Route::get('getCarsbydate/{date}', 'RdwController@getCarsByDate');
Route::get('/getTenCars', 'RdwController@getTenCars');

Route::get('opslaan', 'RdwController@store');
