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

Route::group(['middleware'=> 'web'],function (){

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('pages', 'PageIndexController@index')->name('pages');

    Route::get('products/{alias}','GirdProductController@showItems')->name('girds');
    // nen get theo url : do database k dong nhat | khi get theo url:alias sao do find id
    Route::get('product/{id_url}','GirdProductController@singleProduct')->name('girds.single');





    Route::get('buys',function (){
        return view('shops.shopping.buy');

    });

    Route::get('checkout',function (){
        return view('shops.checkout.checkout');
    });

    /*=====CREATE ROUTE QUERY PRACTICE=============  * */
    Route::get('database','QueriesDatabaseController@basic')->name('data');



    /*=====CREATE ROUTE QUERY PRACTICE=============  * */

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
    #Route::get('product/{alisa}', 'GirdProductController@detail')->name('detail.product');

    /*Route::get('detail',function (){
        return view('shops.details.detail');

    });*/
    /*=====================================================================
    || CRUD APP
    || AJAX IN LARAVEL
    ||
    */
    Route::prefix('crud-app')->group(function (){
        Route::get('/add', 'PostController@index')->name('crud.index');
        Route::post('/add','PostController@addPost')->name('add.crud');
        Route::post('edit','PostController@editPost')->name('edit.crud');
        Route::post('delete','PostController@destroyPost')->name('delete.crud');
    });


});


