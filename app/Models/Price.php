<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
  use HasFactory;

  public function getPrice($data)
  { 
    $price = new Price();
    $price = $price->join('sizes','prices.size_id','=','sizes.size_id')
           ->where('sizes.size_option','=',$data['sizeOption'])
           ->where('prices.product_id',$data['productId'])
           ->get();

    return $price;
  }
}
