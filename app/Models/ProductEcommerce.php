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
    return $product->get();
  }

  public function getProduct()
  {
    $product = new ProductEcommerce();
    $product = $product->all();
    
    return $product;
  }

  public function insertData($data)
  {
    // dd($data['productSrc'],$data['productName'],$data['productDesc'],$data['categoryId']);
    $productecommerce = new ProductEcommerce;
    $productecommerce->product_src = $data['productSrc'];
    $productecommerce->product_name = $data['productName'];
    $productecommerce->product_desc = $data['productDesc'];
    $productecommerce->category_id = $data['categoryId'];
    $productecommerce->created_at = date("Y-m-d H:i:s");
    $productecommerce->updated_at = date("Y-m-d H:i:s");
    $productecommerce->save();
    if($productecommerce->save())
      return "Success";
    return false;
    
  }

  public function deleteData($data)
  {
    
  }
}
