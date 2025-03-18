<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->unsignedBigInteger('id_type'); // Khai báo kiểu dữ liệu trước
            $table->text('description');
            $table->float('unit_price');
            $table->float('promotion_price')->nullable();
            $table->string('image', 255);
            $table->string('unit', 255);
            $table->timestamps();

            // Thêm khóa ngoại
            $table->foreign('id_type')->references('id')->on('type_products')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('products');
    }
};


