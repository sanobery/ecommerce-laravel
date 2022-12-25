<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductEcommerce;
use Faker\Generator as Faker;

class ProductEcommerceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $f)
    {
        $productecommerce = new ProductEcommerce;
        $productecommerce->product_src = "kids7.jpeg";
        $productecommerce->product_name = $f->word();
        $productecommerce->product_desc = $f->paragraph($nbSentences = 3, $variableNbSentences = true);
        $productecommerce->category_id = 1;
        $productecommerce->save();
    }
}
