<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        // Tắt kiểm tra khóa ngoại
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Xóa dữ liệu trong bảng
        DB::table('categories')->truncate();

        // Bật lại kiểm tra khóa ngoại
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Thêm dữ liệu mới
        DB::table('categories')->insert([
            ['name' => 'Điện thoại', 'discription' => 'Danh mục điện thoại'],
            ['name' => 'Laptop', 'discription' => 'Danh mục laptop'],
            ['name' => 'Phụ kiện', 'discription' => 'Danh mục phụ kiện'],
        ]);
    }
}