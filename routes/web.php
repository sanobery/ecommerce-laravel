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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login','HomePageController@loginIndex');
Route::get('/register','HomePageController@register');
Route::get('/women','HomePageController@womenItem')->name('lady');
Route::get('/men','HomePageController@menItem')->name('men');
Route::get('/kid','HomePageController@kidItem')->name('kid');
Route::get('/kids','Admin\ItemController@item');
Route::post('/get_products','Admin\ItemController@getItems');
Route::post('/get_products_by_filter','Admin\ItemController@getProductsByFilter');
