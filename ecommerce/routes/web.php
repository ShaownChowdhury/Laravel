<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\HomepageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomepageController::class,'homepage'])->name('homepage');

Auth::routes();

Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard');

Route::get('/dashboard/category', [CategoryController::class,'category'])->name('category');

Route::post('/dashboard/category', [CategoryController::class,'categoryInsert'])->name('category.insert');

Route::get('/dashboard/categoryDelete/{id}', [CategoryController::class,'categoryDelete'])->name('category.delete');

Route::get('/dashboard/categoryEdit/{id}', [CategoryController::class,'categoryEdit'])->name('category.edit');

Route::put('/dashboard/categoryUpdate/{id}', [CategoryController::class,'categoryUpdate'])->name('category.update');