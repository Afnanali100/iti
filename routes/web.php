<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Models\Product;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',[UserController::class ,'main'])->name('users.index');

Route::get('/show/{id}',[UserController::class,'show'])->name('users.show');

Route::delete('/delete/{id}',[UserController::class,'destroy'])->name('user.delete');

Route::get('/edit/{id}',[UserController::class,'edit'])->name('user.edit');

Route::put('/update/{id}',[UserController::class,'update'])->name('user.update');

Route::get('/create',[UserController::class ,'create'])->name('users.create');

Route::post('/store',[UserController::class ,'store'])->name('user.store');


//product
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/show/{id}', [ProductController::class, 'show'])
    ->name('products.show');

Route::delete('/products/delete/{id}', [ProductController::class, 'destroy'])
    ->name('products.destroy');


Route::get('/products/edit/{id}', [ProductController::class, 'edit'])
    ->name('products.edit');

Route::get('/products/create', [ProductController::class, 'create'])
    ->name('products.create');

Route::put('/products/update/{id}', [ProductController::class, 'update'])
    ->name('products.update');

Route::post('/products/store', [ProductController::class, 'store'])
    ->name('products.store');


//category
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/show/{id}', [CategoryController::class, 'show'])->name('category.show');

Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])
    ->name('category.delete');


Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])
    ->name('category.edit');

Route::get('/category/create', [CategoryController::class, 'create'])
    ->name('category.create');

Route::put('/category/update/{id}', [CategoryController::class, 'update'])
    ->name('category.update');

Route::post('/category/store', [CategoryController::class, 'store'])
    ->name('category.store');


//order
Route::get('/order', [OrderController::class, 'index'])->name('order.index');
Route::get('/order/{id}', [OrderController::class, 'show'])->name('order.show');
Route::delete('/order/delete/{id}',[OrderController::class,'destroy'])->name('orders.destroy');
Route::get('/order/edit/{id}', [OrderController::class, 'edit'])->name('order.edit');
Route::put('/order/update/{id}', [OrderController::class, 'update'])->name('order.update');
Route::get('/order/create', [OrderController::class,'create'])->name('order.create');

Route::post('/order/store', [OrderController::class,'store'])->name('order.store');
// mvc
// route




