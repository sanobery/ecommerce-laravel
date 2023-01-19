<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {   
        $sizes = array('XS','S','M','L','XL','XXL');
        foreach($sizes as $sizeoption){
            $size = new Size;
            $size->size_option = $sizeoption;
            $size->save();
        }
    }
    
}
