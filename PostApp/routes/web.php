<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PostController::class,'home'])->name('home');
Route::get('/posts', [PostController::class,'allPosts'])->name('posts');
Route::post('/store', [PostController::class,'storePost'])->name('store');

Route::get('/edit/{id}', [PostController::class,'editPost'])->name('edit');

Route::get('/delete/{id}', [PostController::class,'deletePost'])->name('delete');