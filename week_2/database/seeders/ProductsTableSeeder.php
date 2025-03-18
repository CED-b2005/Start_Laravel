<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->delete();
        DB::statement("ALTER TABLE products AUTO_INCREMENT = 1");

        DB::table('products')->insert([
            [
                'cate_id'    => 1,
                'name'       => 'iPhone 13',
                'price'      => 20000000,
                'image'      => 'iphone13.png', // Cung cấp giá trị ảnh
            ],
            [
                'cate_id'    => 2,
                'name'       => 'MacBook Air M2',
                'price'      => 28000000,
                'image'      => 'macbook_air_m2.png',
            ],
            [
                'cate_id'    => 3,
                'name'       => 'Tai nghe AirPods Pro',
                'price'      => 5000000,
                'image'      => 'airpods_pro.png',
            ],
        ]);
    }
}
