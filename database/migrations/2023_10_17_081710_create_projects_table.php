<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->longText('benifit')->nullable();
            $table->string('image')->nullable();
            $table->integer('id_doc')->nullable();
            $table->date('startdate')->nullable();
            $table->date('enddate');
            $table->unsignedBigInteger('id_project_target'); $table->foreign('id_project_target')->references('id')->on('project_targets');
            $table->unsignedBigInteger('id_techreferred'); $table->foreign('id_techreferred')->references('id')->on('ref_techreferred');
            $table->unsignedBigInteger('id_missiontype'); $table->foreign('id_missiontype')->references('id')->on('missiontype');
            $table->unsignedBigInteger('id_trlstart'); $table->foreign('id_trlstart')->references('id')->on('trl');
            $table->unsignedBigInteger('id_trlactual'); $table->foreign('id_trlactual')->references('id')->on('trl');
            $table->unsignedBigInteger('id_trlfinal'); $table->foreign('id_trlfinal')->references('id')->on('trl');
            $table->unsignedBigInteger('id_foundsource'); $table->foreign('id_foundsource')->references('id')->on('foundingsources');
            $table->unsignedBigInteger('id_status'); $table->foreign('id_status')->references('id')->on('status');
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
        Schema::dropIfExists('projects');
    }
}
