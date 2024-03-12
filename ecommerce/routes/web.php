<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\HomepageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomepageController::class,'homepage'])->name('homepage');

Auth::routes();

Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/admin/category', [CategoryController::class,'category'])->name('category')->middleware('auth');

Route::post('/admin/category', [CategoryController::class,'categoryInsert'])->name('category.insert')->middleware('auth');

Route::get('/admin/categoryDelete/{id}', [CategoryController::class,'categoryDelete'])->name('category.delete')->middleware('auth');

Route::get('/admin/categoryEdit/{id}', [CategoryController::class,'categoryEdit'])->name('category.edit')->middleware('auth');

Route::put('/admin/categoryUpdate/{id}', [CategoryController::class,'categoryUpdate'])->name('category.update')->middleware('auth');