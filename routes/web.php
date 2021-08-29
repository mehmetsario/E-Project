<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\MoveOnSiteController;
use App\Http\Controllers\UserController;
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
if (App::environment('production')) {
    URL::forceScheme('https');
}
// Authenticating routes:
Auth::routes();



// OrderController routes :
Route::get('/getOrders',[OrderController::class,'getOrders'])->name('getOrders')->middleware('admin');
Route::get('/getProductSale',[OrderController::class,'getProductSale'])->name('getProductSale')->middleware('admin');
Route::get('/viewOrders',[OrderController::class,'index'])->name('order.index')->middleware('admin');
Route::post('/placeOrder',[OrderController::class,'placeOrder'])->name('placeOrder');

//CategoryController routes:
Route::resource('categories',CategoryController::class)->middleware('admin');

//UserController routes:
Route::delete('/users/{id}',[UserController::class,'destroy'])->name('user.destroy')->middleware('admin');


// MessageController routes :
Route::post('/sendMessage',[MessageController::class,'sendMessage'])->name('sendMessage');
Route::get('/getMessages',[MessageController::class,'getMessage'])->name('getMessages')->middleware('admin');
Route::DELETE('/messageDestroy/{id}',[MessageController::class,'messageDestroy'])->name('messageDestroy')->middleware('admin');

// ProductController routes:
Route::resource('products',ProductController::class);
Route::get('/',[ProductController::class,'index'])->name('product.index');
Route::get('/addToCart/{productId}',[ProductController::class,'addToCart'])->name('cart.add');
Route::delete('/DeleteFromCart/{productId}',[ProductController::class,'destroyCart'])->name('cart.delete');
Route::put('/UpdateFromCart/{productId}',[ProductController::class,'updateQty'])->name('cart.update');


// MoveOnSiteController routes:

Route::get('/cart',[MoveOnSiteController::class,'goToCart'])->name('cart');
Route::get('/contact',[MoveOnSiteController::class,'goToContact'])->name('contact');
Route::get('/aboutUs',[MoveOnSiteController::class,'goToAbout'])->name('aboutUs');
Route::get('/checkout',[MoveOnSiteController::class,'checkOut'])->name('checkout');
Route::get('shop/{categoryID}',[MoveOnSiteController::class,'shop'])->name('shop');
Route::post('/search',[MoveOnSiteController::class,'search'])->name('search');
Route::get('/admin',[MoveOnSiteController::class,'getInformation'])->name('admin')->middleware('admin');
Route::get('/UpdateProducts',[MoveOnSiteController::class,'viewProduct'])->name('UpdateProducts')->middleware('admin');
Route::get('/AddProduct',[MoveOnSiteController::class,'prepareToAddProduct'])->name('AddProduct')->middleware('admin');
Route::get('/{productId}',[MoveOnSiteController::class,'singleProduct'])->name('singleProduct');
















