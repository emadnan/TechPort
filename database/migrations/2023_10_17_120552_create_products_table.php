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
            $table->unsignedBigInteger('id_businessarea'); $table->foreign('id_businessarea')->references('id')->on('businessareas');
            $table->longText('description')->nullable(); 
            $table->integer('id_pnc')->nullable();
            $table->unsignedBigInteger('id_priority'); $table->foreign('id_priority')->references('id')->on('priorities');
            $table->string('note')->nullable(); 
            $table->unsignedBigInteger('id_techreferred'); $table->foreign('id_techreferred')->references('id')->on('ref_techreferred');
            $table->unsignedBigInteger('id_requirement'); $table->foreign('id_requirement')->references('id')->on('requirements');
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
