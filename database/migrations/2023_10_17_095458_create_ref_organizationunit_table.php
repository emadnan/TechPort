<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefOrganizationunitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_organizationunit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_organizationunit'); $table->foreign('id_organizationunit')->references('id')->on('organizationunit');
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
        Schema::dropIfExists('ref_organizationunit');
    }
}
