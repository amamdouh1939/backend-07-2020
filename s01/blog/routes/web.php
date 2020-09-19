<?php

Route::get('/', 'FrontPageController@index');
Route::get('/about', 'FrontPageController@about');
Route::get('/contact-us', 'FrontPageController@contact');
// Parameter in path
// Route::get('/about/{name}', 'FrontPageController@about');
