<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefProjectorganizationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_projectorganization', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_orgperformingwork'); $table->foreign('id_orgperformingwork')->references('id')->on('orgperformingwork');
            $table->unsignedBigInteger('id_legalentityrole'); $table->foreign('id_legalentityrole')->references('id')->on('legalentityrole');
            $table->unsignedBigInteger('id_project'); $table->foreign('id_project')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_projectorganization');
    }
}
