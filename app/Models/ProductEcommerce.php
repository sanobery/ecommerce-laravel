<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductEcommerce extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';

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


    public function insertUpdateData($request)
    {
        $productecommerce = new ProductEcommerce;
        $data = $request->all();
        if($data['productId']) {
        $productecommerce = $productecommerce->where('product_id',$data['productId'])->first();
        } 

        if($request->hasFile('productSrc')) {
        $file = $request->file('productSrc');
        $fileName = sha1(time() . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
        Storage::put('public/Uploads/'.$fileName,file_get_contents($file->getRealPath()));
        $productecommerce->product_src = $fileName;
        }

        $productecommerce->product_name = $data['productName'];
        $productecommerce->product_desc = $data['productDesc'];
        $productecommerce->category_id = $data['categoryId'];

        if($productecommerce->save()) {
        return true;
        }

        return false;
        
    }

    
    public function deleteData($data)
    {
        $productecommerce = new ProductEcommerce;
        $productecommerce = $productecommerce->where('product_id',$data['product_id'])->delete();

        return true;
    }

}
