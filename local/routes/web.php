<?php

Auth::routes();

Route::get('/', 'DashboardController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('home');
