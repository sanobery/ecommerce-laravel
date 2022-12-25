<?php

namespace App\Http\Controllers\Admin;

use App\Models\Size;
use App\Models\Color;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use App\Models\ProductEcommerce;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function item(){
        return view('register');
    }

    public function getItems(Request $request,ProductEcommerce $product, Size $size, Color $color)
    {
        $product = $product->getAllProducts($request->all());
        $size = Size::join('product_sizes','sizes.size_id','=','product_sizes.size_id')->join('product_ecommerces','product_sizes.product_id','=','product_ecommerces.product_id')->whereIn('category_id',[$request['category']])->get();
        // dd($size);
        return response()->json([
            'products'=>$product,
            'size'=>$size
        ]);
    }
}
//select product_sizes.product_id,product_ecommerces.category_id,sizes.size_option from sizes join product_sizes on product_sizes.size_id = sizes.size_id join product_ecommerces on product_ecommerces.product_id = product_sizes.product_id where category_id =2

//select GROUP_CONCAT('sizes.size_option'),product_sizes.product_id,product_ecommerces.category_id,sizes.size_option from sizes join product_sizes on product_sizes.size_id = sizes.size_id join product_ecommerces on product_ecommerces.product_id = product_sizes.product_id where category_id =2 group by product_ecommerces.product_id;