<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\SslCommerzPaymentController;
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




// Cart Routes
Route::middleware('customer')->name('cart.')->prefix('/cart/')->controller(CartController::class)->group(function (){
    Route::post('/cart-store','storeCart')->name('store');
    Route::post('/cart-update','updateCart')->name('update');
    Route::get('/cart-view','viewCart')->name('view');
    Route::get('/cart-delete/{id}','deleteCart')->name('delete');
});

// Order Routes
Route::middleware('customer')->name('order.')->prefix('/order/')->controller(OrderController::class)->group(function (){
    Route::get('/checkout','checkout')->name('checkout');
});


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END








?>