<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesV2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories_v2')->insert([
            ['name' => 'Electronics', 
            'description' => 'Devices and gadgets'],

            ['name' => 'Fashion', 
            'description' => 'Clothing and accessories'],

            ['name' => 'Books', 
            'description' => 'Various kinds of books'],
        ]);
    }
}
