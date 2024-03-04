<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\HomepageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomepageController::class,'homepage'])->name('homepage');

Auth::routes();

Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard');
