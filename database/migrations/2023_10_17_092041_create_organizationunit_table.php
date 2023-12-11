<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationunitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizationunit',  function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('unitcode');
            $table->longText('description');
            $table->string('releventcompany');
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
        Schema::dropIfExists('organizationunit');
    }
}
