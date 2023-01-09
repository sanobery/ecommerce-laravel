<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Size;
use App\Models\Color;
use App\Models\Product;
use App\Http\Requests\LogIn;
use App\Models\UserRegister;
use Illuminate\Http\Request;
use App\Models\ProductEcommerce;
use App\Http\Requests\Registration;

class HomePageController extends Controller
{
  public function list(UserRegister $user)
  {
    $user = $user->getData();
    return view('admin.list',['users'=>$user]);
  }

  public function getItems(Request $request,ProductEcommerce $product, Size $size, Color $color)
  {
    $product = $product->getAllProducts($request->all());
    $size = Size::join('product_sizes','sizes.size_id','=','product_sizes.size_id')->join('product_ecommerces','product_sizes.product_id','=','product_ecommerces.product_id')->whereIn('category_id',[$request['category']])->get();

    return response()->json([
      'products'=>$product,
      'size'=>$size
    ]);
  }

  public function userProfile()
  {
    return view('user.userprofile');   
  }

  public function login(LogIn $request, UserRegister $user)
  {
    $user = $user->checkUserDetail($request->all());
    if($user && $request->session()->put('user',$user[0])) {
      return redirect('/');
    }
   
    return redirect('/login');
  }

  public function registration(Registration $request, UserRegister $user)
  {
    $user = $user->saveUserDetail($request->all());
    $request->session()->put('user',$user);

    return redirect('/');
  }

  public function loginIndex()
  { 
    return view('user.login');
  }

  public function signupIndex()
  { 
    return view('user.signup');
  }

  public function womenItem(Size $size, Color $color)
  { 
    $size = $size->getAllSize();
    $color = $color->getAllColor();

    return view('item.women')->with(['sizes'=>$size,'colors'=>$color]);
  }

  public function menItem(Size $size, Color $color)
  { 
    $size = $size->getAllSize();
    $color = $color->getAllColor();

    return view('item.men',['sizes'=>$size,'colors'=>$color]);
  }

  public function kidItem(Size $size, Color $color)
  { 
    $size = $size->getAllSize();
    $color = $color->getAllColor();
    
    return view('item.kid',['sizes'=>$size,'colors'=>$color]);
  }

  public function logOut()
  {
    Session::flush();

    return redirect('/');
  }
}
