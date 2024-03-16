<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\HomepageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomepageController::class,'homepage'])->name('homepage');

Auth::routes();

Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard')->middleware('auth');

Route::controller(CategoryController::class)->group(function (){
    
Route::get('/admin/category', 'category')->name('category')->middleware('auth');

Route::post('/admin/category', 'categoryInsert')->name('category.insert')->middleware('auth');

Route::get('/admin/categoryDelete/{id}', 'categoryDelete')->name('category.delete')->middleware('auth');

Route::get('/admin/categoryEdit/{id}', 'categoryEdit')->name('category.edit')->middleware('auth');

Route::put('/admin/categoryUpdate/{id}', 'categoryUpdate')->name('category.update')->middleware('auth');
});

