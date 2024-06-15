<?php

use App\Http\Controllers\Frontend\Auth\LoginController;
use App\Http\Controllers\Frontend\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\HomepageController;

Route::get('/',[HomepageController::class,'homepage'])->name('homepage');
Route::get('/category{slug}',[ProductController::class,'showCategoryProduct'])->name('product.category');
Route::get('/product/{slug}',[ProductController::class,'showProduct'])->name('product.show');

Route::get('/products/search',[ProductController::class,'searchProduct'])->name('product.search');


Route::get('/sign-in',[LoginController::class,'showloginForm'])->name('signin');
Route::post('/sign-in',[LoginController::class,'login'])->name('signin.verify');

Route::get('/sign-up',[RegisterController::class,'showRegistrationForm'])->name('signup');
Route::post('/sign-up',[RegisterController::class,'register'])->name('signup.store');


?>