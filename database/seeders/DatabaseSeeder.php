<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\SizeSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\ProductEcommerceSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call([ProductSeeder::class]);
        // $this->call([ProductEcommerceSeeder::class]);
        // $this->call([SizeSeeder::class]);
        $this->call([ColorSeeder::class]);
    }
    
}
