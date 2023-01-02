<?php

namespace App\Http\Controllers;

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
  public function item()
  {
    return view('register');
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
      //dd($request->input());
    $user = $user->checkUserDetail($request->all());
    dd($user);
      // $request->session()->put('first_name','san');
      // if($user==1) {
      //   return redirect('/login');
      // }
      // else {
      //   return redirect('/user');
      // }
  }

  public function registration(Registration $request, UserRegister $user)
  {
    $user = $user->saveUserDetail($request->all());
    return redirect('/');
  }

  public function loginIndex()
  { 
    $name = '<h1>abc</h1>';
    $email = '<h2>sanober@gmail.com</h2>';
    return view('user.login',[
      'name1'=>$name,
      'email'=>$email
    ]);
  }

  public function signupIndex()
  { 
    return view('user.signup');
  }

  public function register()
  { 
    return view('register');
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
}
