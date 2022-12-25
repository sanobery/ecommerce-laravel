<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function getAllProduct()
    {
        return Product::all();
    }

    public function getAllProductById($id)
    {
        //dd(Product::find($id));
        // dd(Product::where('id',$id));
        return Product::where('id',$id);
    }
}
