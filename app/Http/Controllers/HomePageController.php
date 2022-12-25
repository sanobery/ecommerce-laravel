<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Size;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductEcommerce;

class HomePageController extends Controller
{
    public function loginIndex()
    { 
      $name = '<h1>abc</h1>';
      $email = '<h2>sanober@gmail.com</h2>';
      return view('login',[
        'name1'=>$name,
        'email'=>$email
      ]);
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
