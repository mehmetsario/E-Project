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
Route::get('/shop',[\App\Http\Controllers\ProductController::class,'shop']);
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/admin', function () {
    return view('admin.index');
})->name('admin')->middleware('admin');
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('aboutus');
});
Route::get('/AddCatogery', function () {
    return view('admin.addCatogery');
})->name('addCat');;

Route::get('/UpdateCategory', function () {
    return view('admin.UpdateCategory');
})->name('UpdateCategory');


Route::get('/AddProduct',[\App\Http\Controllers\ProductController::class,'passCategory'])->name('AddProduct');

Route::get('/UpdateProducts',[\App\Http\Controllers\ProductController::class,'viewProduct'])->name('UpdateProducts');


Route::resource('categories',\App\Http\Controllers\CategoryController::class);
Route::resource('products',\App\Http\Controllers\ProductController::class);

\Illuminate\Support\Facades\Auth::routes();

