<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;

    public function getProductSize(){
        $productsize = ProductSize::where('size_id',$size)->get('product_id');
        dd($productsize);
        return $productsize;
    }
}
