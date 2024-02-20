<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;


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

 
// post and category

Route::get('/posts',[PostController::class,'index'])->name('home');
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
Route::post('/posts',[PostController::class,'store'])->name('posts.store');
Route::post('/posts/category/{id}',[PostController::class,'addCategory'])->name('posts.category');
Route::get('/posts/{id}',[PostController::class,'show'])->name('posts.show');

Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category',[CategoryController::class,'store'])->name('category.store');



// product and order

Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product',[ProductController::class,'store'])->name('product.store');

Route::get('/order',[OrderController::class,'index'])->name('order.index');
Route::get('/order/create',[OrderController::class,'create'])->name('order.create');
Route::get('/order/{id}',[OrderController::class,'show'])->name('order.show');
Route::post('/order',[OrderController::class,'store'])->name('order.store');
Route::post('/order/addProduct',[OrderController::class,'addProduct'])->name('order.addProduct');

