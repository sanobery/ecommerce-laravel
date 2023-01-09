<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Size;
use App\Models\Admin;
use App\Models\Color;
use App\Http\Requests\LogIn;
use App\Models\UserRegister;
use Illuminate\Http\Request;
use App\Models\ProductEcommerce;

class AdminController extends Controller
{
  public function index()
  {
    return view('admin.adminlogin');
  }

  public function checkIsAdmin(Login $request,Admin $admin)
  {
    $admin = $admin->checkAdminDetail($request->all());
    if($admin && $request->session()->put('admin',$admin[0])){
      return redirect('/dashboard');
    }
    return redirect('/adminlogin');
  }

  public function dashboard(UserRegister $user,Size $size, Color $colour)
  {
    $user = $user->getCount();
    $size = $size->getCount();
    $colour = $colour->getCount();

    return view('admin.dashboard',[
      'userCount' => $user,
      'sizeCount' => $size,
      'colourCount' => $colour
    ]);
  }

  public function logOut()
  {
    Session::flush();

    return redirect('/adminlogin');
  }

  public function productList(ProductEcommerce $product)
  {
    $product = $product->getProduct();
    return view('admin.productlist',[
      'products' => $product,
    ]);
  }

  public function update($id)
  {
    return $id;
  }

  public function createProduct(Request $request,ProductEcommerce $product)
  {
    $product->insertData($request->all());
    return response()->json(['message'=>"Success"]);
  }

  public function deleteProduct(Request $request,ProductEcommerce $product)
  {
    // dd($request);
    $product->deleteData($request->all());
    return $id;
  }


}
