<?php

Route::resource('/contacts', 'ContactController');cr


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/contacts', 'ContactController');
