<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\HomepageController;

Route::get('/',[HomepageController::class,'homepage'])->name('homepage');
Route::get('/category{slug}',[ProductController::class,'showCategoryProduct'])->name('product.category');
Route::get('/product/{slug}',[ProductController::class,'showProduct'])->name('product.show');

Route::get('/products/search',[ProductController::class,'searchProduct'])->name('product.search');


?>