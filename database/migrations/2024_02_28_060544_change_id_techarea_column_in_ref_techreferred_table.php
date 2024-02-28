<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeIdTechareaColumnInRefTechreferredTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ref_techreferred', function (Blueprint $table) {
            $table->unsignedBigInteger("id_techarea")->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ref_techreferred', function (Blueprint $table) {
            $table->unsignedBigInteger("id_techarea")->nullable()->change();
        });
    }
}
