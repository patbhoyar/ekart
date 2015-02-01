<?php

Route::get('/', 'HomeController@index');

Route::resource('user', 'UserController');
Route::resource('product', 'ProductController');
