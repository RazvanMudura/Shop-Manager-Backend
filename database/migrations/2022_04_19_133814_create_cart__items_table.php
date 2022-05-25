<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->timestamps();
            $table->tinyIncrements('id');
            $table->string('image');
            $table->string('name');
            $table->unsignedSmallInteger('quantity');
            $table->unsignedSmallInteger('volume');
            $table->unsignedSmallInteger('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('cart_items');
    }
};
