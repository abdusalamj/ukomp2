<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pemesanan');
            $table->integer('kode_pemesanan');
            $table->string('tanggal_pemesanan');
            $table->integer('id_pelanggan');
            $table->integer('kode_kursi');
            $table->integer('id_rute');
            $table->string('tujuan');
            $table->string('tanggal_berangkat');
            $table->string('jam_cekin');
            $table->string('jam_berangkat');
            $table->string('total_bayar');
            $table->integer('id_petugas');
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
        Schema::dropIfExists('pemesanans');
    }
}
