<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/todo', 'App\Http\Controllers\TodoController@index')
    ->name('todo.index');

Route::get('/todo/create', 'App\Http\Controllers\TodoController@create')
    ->name('todo.create');

Route::get('/todo/{item}', 'App\Http\Controllers\TodoController@show')
    ->name('todo.show');

Route::post('/todo', 'App\Http\Controllers\TodoController@store')
    ->name('todo.store');

Route::get('/todo/{item}/edit', 'App\Http\Controllers\TodoController@edit')
    ->name('todo.edit');

Route::put('/todo/{item}', 'App\Http\Controllers\TodoController@update')
    ->name('todo.update');

Route::delete('todo/{item}', 'App\Http\Controllers\TodoController@destroy')
    ->name('todo.destroy');*/

Route::resource('/todo', \App\Http\Controllers\TodoController::class);
Route::resource('/pages', \App\Http\Controllers\PageController::class);
Route::resource('/admin', \App\Http\Controllers\AdminController::class);
