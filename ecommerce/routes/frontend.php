<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\Auth\LoginController;
use App\Http\Controllers\Frontend\Auth\SocialController;
use App\Http\Controllers\Frontend\Auth\RegisterController;

Route::get('/',[HomepageController::class,'homepage'])->name('homepage');
Route::get('/category{slug}',[ProductController::class,'showCategoryProduct'])->name('product.category');
Route::get('/product/{slug}',[ProductController::class,'showProduct'])->name('product.show');

Route::get('/products/search',[ProductController::class,'searchProduct'])->name('product.search');


Route::get('/sign-in',[LoginController::class,'showloginForm'])->name('signin');
Route::post('/sign-in',[LoginController::class,'login'])->name('signin.verify');

Route::get('/sign-up',[RegisterController::class,'showRegistrationForm'])->name('signup');
Route::post('/sign-up',[RegisterController::class,'register'])->name('signup.store');

Route::get('/google/signin',[SocialController::class, 'googleLogin'])->name('google.login');
Route::get('/google/redirect',[SocialController::class, 'googleVerify'])->name('google.verify');

Route::get('/facebook/signin',[SocialController::class, 'facebookLogin'])->name('facebook.login');
Route::get('/facebook/redirect',[SocialController::class, 'facebookVerify'])->name('facebook.verify');

Route::get('/signout',[LoginController::class,'logout'])->name('signout');

Route::get('/my-profile',function(){
    return view('frontend.MyAccount');
})->middleware('customer');


?>