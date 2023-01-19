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
        return view('user.payment');

    }

}
