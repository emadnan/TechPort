<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefTechreferredTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_techreferred', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_techarea'); $table->foreign('id_techarea')->references('id')->on('techareas');
            $table->unsignedBigInteger('id_techsector'); $table->foreign('id_techsector')->references('id')->on('techsector');
            $table->unsignedBigInteger('id_techniche'); $table->foreign('id_techniche')->references('id')->on('techniche');
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
        Schema::dropIfExists('ref_techreferred');
    }
}
