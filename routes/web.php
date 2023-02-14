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
    echo "\n Memory Consumption is   ";
	echo round(memory_get_usage()/1048576,2).''.' MB';
	$ncpu = 1;

	if(is_file('/proc/cpuinfo')) {
		$cpuinfo = file_get_contents('/proc/cpuinfo');
		preg_match_all('/^processor/m', $cpuinfo, $matches);
		$ncpu = count($matches[0]);
	}
	echo $ncpu;
	$ans = 1;
	if (is_file('/proc/cpuinfo')) {
	  $cpuinfo = file_get_contents('/proc/cpuinfo');
	  preg_match_all('/^processor/m', $cpuinfo, $matches);
	  $ans = count($matches[0]);
	} else if ('WIN' === strtoupper(substr(PHP_OS, 0, 3))) {
	  $process = @popen('wmic cpu get NumberOfCores', 'rb');
	  if (false !== $process) {
		fgets($process);
		$ans = intval(fgets($process));
		pclose($process);
	  }
	} else {
	  $ps = @popen('sysctl -a', 'rb');
	  if (false !== $ps) {
		$output = stream_get_contents($ps);
		preg_match('/hw.ncpu: (\d+)/', $output, $matches);
		if ($matches) {
		  $ans = intval($matches[1][0]);
		}
		pclose($ps);
	  }
	}  
	echo $ans;
  return view('welcome');
})->name('homepage');

// login route with middleware
Route::group(['middleware'=>['loginRedirect']],function () {
    Route::get('/login','HomePageController@loginIndex')->name('login');
    Route::get('/signup','HomePageController@signupIndex')->name('signup');
    Route::post('/signUp','HomePageController@registration');
    Route::post('/login','HomePageController@login');
});

Route::group(['middleware'=>['authenticatedUser']],function () {
    Route::prefix('user')->group(function(){
        Route::get('userdetails','HomePageController@userProfile')->name('profile');
        Route::get('updatedetail','CustomerController@updateData')->name('updatedetail');
        Route::post('updatedetail','CustomerController@updateUserInfo');
    });
});

Route::resource('productdetail','ProductController');
Route::get('/logout','HomePageController@logOut')->name('logout');

// admin login route with middleware
Route::group(['middleware'=>['adminRedirect']],function (){
    Route::get('/adminlogin','AdminController@index')->name('adminhomepage');
    Route::post('/admin','AdminController@checkIsAdmin');
});

Route::group(['middleware'=>['adminLogin']],function (){
    Route::get('/dashboard','AdminController@dashboard')->name('admindashboard');
    Route::get('list','HomePageController@list')->name('list');
    Route::get('/productlist','AdminController@productList')->name('productlist');
    Route::post('/productlist','AdminController@createEditProduct');
    Route::post('/deleteitem','AdminController@deleteProduct');
});
Route::get('/adminlogout','AdminController@logOut')->name('adminlogout');

Route::get('/shop','HomePageController@shop')->name('shoppage');
Route::get('/register','HomePageController@register')->name('register');
Route::get('/men','HomePageController@menItem')->name('men');
Route::get('/kid','HomePageController@kidItem')->name('kid');
Route::get('/women','HomePageController@womenItem')->name('lady');
Route::post('/get_products','HomePageController@getItems');
Route::get('/cart','ItemController@cartItem')->name('cart');
Route::post('/get_prices','HomePageController@getPrices');
Route::get('/contact','HomePageController@contact')->name('contact');
Route::get('/productDetail','HomePageController@productDetail')->name('productdetail');
Route::get('/proceedToBuy','ItemController@buyNow')->name('buynow');

Route::get('/mail','ItemController@index');