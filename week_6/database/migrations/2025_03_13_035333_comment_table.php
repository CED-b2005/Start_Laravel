<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id(); // Tự động tạo khóa chính là 'id'
            $table->string('username'); // Tên người dùng
            $table->text('comment'); // Nội dung bình luận
            $table->unsignedBigInteger('id_product'); // Khóa ngoại tham chiếu tới bảng products
            $table->timestamps(); // Tự động tạo 'created_at' và 'updated_at'

            // Tạo khóa ngoại liên kết với bảng products
            $table->foreign('id_product')->references('id')->on('products')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
