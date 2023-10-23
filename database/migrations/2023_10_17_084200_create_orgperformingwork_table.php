<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrgperformingworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orgperformingwork', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->longText('description');
            $table->string('typeoflocation')->nullable();
            $table->unsignedBigInteger('id_type'); $table->foreign('id_type')->references('id')->on('orgtype');
            $table->unsignedBigInteger('id_humanentity'); $table->foreign('id_humanentity')->references('id')->on('humanentity');
            $table->unsignedBigInteger('id_location'); $table->foreign('id_location')->references('id')->on('location');
            $table->longText('note')->nullable();
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
        Schema::dropIfExists('orgperformingwork');
    }
}
