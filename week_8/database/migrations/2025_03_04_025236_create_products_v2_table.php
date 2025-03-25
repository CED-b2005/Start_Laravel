<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products_v2', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('price');
            $table->string('image');
            $table->unsignedBigInteger('category_id'); // Đảm bảo kiểu dữ liệu đúng
            $table->foreign('category_id')->references('id')->on('categories_v2')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_v2');
    }
};
