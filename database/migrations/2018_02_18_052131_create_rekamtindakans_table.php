<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRekamtindakansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekamtindakans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('diagnosasakit');
            $table->string('tanggalrawat');
            $table->string('suhutubuh');
            $table->string('tensidarah');
            $table->string('ketgejala');

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
        Schema::dropIfExists('rekamtindakans');
    }
}
