<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductEcommerce extends Model
{
    use HasFactory;

    public function getAllProducts($data)
    { 
        $product = new ProductEcommerce();
        if(isset($data['category']) && count($data['category'])) {
           $product = $product->whereIn('category_id',$data['category']);
        }

        if(isset($data['size']) && count($data['size'])) {
            $product = $product->leftJoin('product_sizes','product_sizes.product_id','=','product_ecommerces.product_id')->whereIn('size_id',$data['size']);
        }

        if(isset($data['color']) && count($data['color'])) {
            $product = $product->leftJoin('product_colors','product_colors.product_id','=','product_ecommerces.product_id')->whereIn('color_id',$data['color']);
        }
        // dd($product->toSql());

        return $product->get();
    }
}
