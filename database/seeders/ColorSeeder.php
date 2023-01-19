<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Color;
use Faker\Generator as Faker;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run(Faker $f)
    {
        for($i=0;$i<10;$i++){
            $colour = new Color;
            $colour->color_name = $f->SafeColorName();
            $colour->save();
        }
    }

}
