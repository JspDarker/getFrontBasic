<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('pages', 'PageIndexController@index')->name('pages');

Route::get('detail',function (){
    return view('shops.details.detail');

});

Route::get('buys',function (){
    return view('shops.shopping.buy');

});

Route::get('checkout',function (){
    return view('shops.checkout.checkout');

});