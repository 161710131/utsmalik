<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTunaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tunais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kumpulandata');
            $table->string('nama');
            $table->date('tglbayar');
            $table->string('rinciantagihan');
            $table->integer('besartagihan');

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
        Schema::dropIfExists('tunais');
    }
}
