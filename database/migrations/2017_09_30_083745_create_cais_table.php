<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('day');
			$table->integer('month');
			$table->integer('année');
            $table->integer('mablaghe_kouli');
            $table->integer('flixy_mobilis');
            $table->integer('flixy_djezy');
            $table->integer('flixy_oridoo');
            $table->integer('mochtarayat_mobilis')->nullable()->default('0');
            $table->integer('mochtarayat_djezy')->nullable()->default('0');
            $table->integer('mochtarayat_oridoo')->nullable()->default('0');
            $table->integer('nombre_carte_mobilis_500')->nullable()->default('0');
            $table->integer('nombre_carte_mobilis_200')->nullable()->default('0');
            $table->integer('nombre_carte_mobilis_100')->nullable()->default('0');
            $table->integer('mochtarayat_carte_mobilis')->nullable()->default('0');
            $table->integer('ba9i_sondo9');
            $table->text('nom_mochtarayat_mokhtalifa')->nullable()->default('0');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('cais');
    }
}
