<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefProjecttechnologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_projecttechnologies' , function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_project'); $table->foreign('id_project')->references('id')->on('projects');
            $table->unsignedBigInteger('id_technology'); $table->foreign('id_technology')->references('id')->on('technologies');
            $table->date('date');
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
        Schema::dropIfExists('ref_projecttechnologies');
    }
}
