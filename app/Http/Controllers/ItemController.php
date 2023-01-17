<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class ItemController extends Controller
{
  public function cartItem()
  {
    return view('item.cart');
  }

  public function buyNow()
  {
    // if(Session::has('user'))
      return view('user.payment');

    // return redirect('/signup');
  }

}
