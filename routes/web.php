<?php

use Illuminate\Support\Facades\Route;

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
if (\Illuminate\Support\Facades\App::environment('production')) {
    \Illuminate\Support\Facades\URL::forceScheme('https');
}

Route::get('/',[\App\Http\Controllers\ProductController::class,'index'])->name('product.index');
Route::get('/addToCart/{productId}',[\App\Http\Controllers\ProductController::class,'addToCart'])->name('cart.add');
Route::delete('/DeleteFromCart/{productId}',[\App\Http\Controllers\ProductController::class,'destroyCart'])->name('cart.delete');
Route::put('/UpdateFromCart/{productId}',[\App\Http\Controllers\ProductController::class,'updateQty'])->name('cart.update');
