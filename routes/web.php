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
Route::get('/', function () {
    return view('contact');
});
