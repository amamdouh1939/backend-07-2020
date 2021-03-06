<?php
// Auth user
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::view('/dashboard', 'dashboard')->name('dashboard');

Route::resource('/categories', CategoryController::class);
Route::resource('/products', ProductController::class);

Route::get('locale/{locale}', [AdminController::class, 'locale'])
    ->where('locale', '(en|ar)')
    ->name('locale.update');
