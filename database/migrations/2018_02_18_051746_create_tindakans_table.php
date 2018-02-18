<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTindakansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tindakans', function (Blueprint $table) {
            $table->increments('id');
             $table->string('kode_tindakan')->unique();
            $table->string('nama');
            $table->string('jenistindakan');
            $table->string('waktutindakan');
            $table->double('tariftindakan');
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
        Schema::dropIfExists('tindakans');
    }
}
