<?php

Route::get('/', 'UserController@index');

Route::resource('user', 'UserController');
Route::resource('product', 'ProductController');
