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
Route::name('product.')
->group(function() {

    Route::get('/', 'ProductController@index')->name('index');
    Route::get('/product/{product}', 'ProductController@show')->name('show');
    Route::delete('/product/destroy', 'ProductController@destroy')->name('destroy');
});

Route::name('line_item.')
->group(function() {

    Route::Post('/line_item/create', 'Line_ItemController@create')->name('create');
    Route::Post('/line_item/delete', 'Line_ItemController@delete')->name('delete');
});


Route::name('cart.')
->group(function() {
    Route::get('/cart', 'CartController@index')->name('index');
    Route::get('/cart/checkout', 'CartController@checkout')->name('checkout');
    Route::get('/cart/success', 'CartController@success')->name('success');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
