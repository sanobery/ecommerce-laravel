<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Generator as Faker;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $f)
    { 
        $product = new Product;
        $product->url = "/assets/kids1.jpeg";
        $product->name = $f->safeColorName();
        $product->save();
    } 
    
}
