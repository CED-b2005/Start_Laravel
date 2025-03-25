<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->string('link', 100);
            $table->string('image', 100);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('slides');
    }
};
