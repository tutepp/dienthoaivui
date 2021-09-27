<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
Route::get('home', [ProductController::class, 'home']);
Route::get('product', [ProductController::class, 'index'])->name('products.index');
Route::get('product/{product_id}', [ProductController::class, 'getProductById'])->name('products.getProductById');
Route::post('/product', [ProductController::class, 'store'])->name('products.store');
Route::put('/product_update/{product_id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/product/{product_id}', [ProductController::class, 'destroy'])->name('products.destroy');




