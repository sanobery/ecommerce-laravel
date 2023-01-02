<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;

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
Route::group(['middleware'=>['web']],function (){
  Route::get('/login','HomePageController@loginIndex')->name('login');
  Route::get('/user','HomePageController@userProfile')->name('user');
  Route::get('/signup','HomePageController@signupIndex')->name('signup');
  Route::post('/signUp','HomePageController@registration');
  Route::post('/user','HomePageController@login');
});
// Route::get('/login','HomePageController@loginIndex')->name('login');
// Route::get('/user','HomePageController@userProfile')->name('user');
// Route::get('/signup','HomePageController@signupIndex')->name('signup');
// Route::post('/signUp','HomePageController@registration');
// Route::post('/user','HomePageController@login');
Route::get('/register','HomePageController@register')->name('register');
Route::get('/men','HomePageController@menItem')->name('men');
Route::get('/kid','HomePageController@kidItem')->name('kid');
Route::get('/kids','Admin\ItemController@item');
Route::post('/get_products','Admin\ItemController@getItems');
Route::post('/get_products_by_filter','Admin\ItemController@getProductsByFilter');
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/women', [HomePageController::class, 'womenItem'])->name('lady');
Route::post('/get_products',[HomePageController::class, 'getItems']);
// Route::post('/get_products_by_filter','Admin\ItemController@getProductsByFilter');
