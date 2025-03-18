<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;   
use Illuminate\Database\Schema\Blueprint;  
class TaoController extends Controller
{
    public function createProductsTable()
    {
        if (!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->id(); // ID tự động tăng
                $table->string('name'); // Tên sản phẩm
                $table->decimal('price', 10, 2); // Giá sản phẩm
                $table->string('image'); // Đường dẫn ảnh
                $table->timestamps(); // created_at & updated_at
            });

            return "Bảng 'products' đã được tạo!";
        } else {
            return "Bảng 'products' đã tồn tại!";
        }
    }
}
