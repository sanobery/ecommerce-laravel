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
})->name('homepage');

// login route with middleware
Route::group(['middleware'=>['loginRedirect']],function (){
  Route::get('/login','HomePageController@loginIndex')->name('login');
  Route::get('/signup','HomePageController@signupIndex')->name('signup');
  Route::post('/signUp','HomePageController@registration');
  Route::post('/login','HomePageController@login');
});

Route::group(['middleware'=>['authenticatedUser']],function (){
  Route::prefix('user')->group(function(){
    Route::get('userdetails','HomePageController@userProfile')->name('user');
    Route::get('updatedetail','CustomerController@updateData')->name('updatedetail');
    Route::post('updatedetail','CustomerController@updateUserInfo');
  });
});

Route::resource('customer','DashboardController');
Route::get('/logout','HomePageController@logOut')->name('logout');

// admin login route with middleware
Route::group(['middleware'=>['adminRedirect']],function (){
  Route::get('/adminlogin','AdminController@index')->name('adminhomepage');
  Route::post('/admin','AdminController@checkIsAdmin');
});

Route::group(['middleware'=>['adminLogin']],function (){
  Route::get('/dashboard','AdminController@dashboard')->name('admindashboard');
  Route::get('list', 'HomePageController@list')->name('list');
  Route::get('/productlist', 'AdminController@productList')->name('productlist');
  Route::post('/productlist','AdminController@createEditProduct');
  Route::post('/deleteitem','AdminController@deleteProduct');
});
Route::get('/adminlogout','AdminController@logOut')->name('adminlogout');


Route::get('/register','HomePageController@register')->name('register');
Route::get('/men','HomePageController@menItem')->name('men');
Route::get('/kid','HomePageController@kidItem')->name('kid');
Route::get('/women','HomePageController@womenItem')->name('lady');
Route::post('/get_products','HomePageController@getItems');
