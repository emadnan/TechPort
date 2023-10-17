<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_equipments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_equipment'); $table->foreign('id_equipment')->references('id')->on('equipment');
            $table->unsignedBigInteger('id_product'); $table->foreign('id_product')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_equipments');
    }
}
