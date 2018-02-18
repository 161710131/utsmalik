<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemberianobatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemberianobats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nomorrawatjalan')->unique();
            $table->date('tgldiberiobat');
            $table->date('tglrawat');
            $table->integer('jumlahobat');
            $table->string('dosis');
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
        Schema::dropIfExists('pemberianobats');
    }
}
