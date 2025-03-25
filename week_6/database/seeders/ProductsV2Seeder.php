<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsV2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products_v2')->insert([
            ['name' => 'Smartphone', 
            'price' => 500, 
            'image' => 'smartphone.jpg', 
            'category_id' => 1],

            ['name' => 'T-Shirt', 
            'price' => 20, 
            'image' => 'tshirt.jpg', 
            'category_id' => 2],

            ['name' => 'Novel', 
            'price' => 15, 
            'image' => 'novel.jpg', 
            'category_id' => 3],
        ]);
    }
}
