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
        return Product::where('id',$id);
    }
    
}
