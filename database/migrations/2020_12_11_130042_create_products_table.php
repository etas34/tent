<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('type_id');
            $table->string('image')->nullable();
            $table->string('price')->nullable();
            $table->string('width')->nullable();
            $table->string('length')->nullable();
            $table->string('price_m2')->nullable();
            $table->integer('insulation_id')->nullable();
            $table->string('door')->nullable();
            $table->string('steep_height')->nullable();
            $table->string('height_middle')->nullable();
            $table->string('square_meters')->nullable();
            $table->string('foot_height')->nullable();
            $table->string('foot_count')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
