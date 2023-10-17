<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechsectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('techsector', function (Blueprint $table) {
            $table->id();
            $table->string('techsector');
            $table->string('techsectordescription');
            $table->integer('id_dm');
            $table->integer('otme');
            $table->string('note');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('techsector');
    }
}
