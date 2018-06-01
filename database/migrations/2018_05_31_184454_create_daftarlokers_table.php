<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarlokersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftarlokers', function (Blueprint $table) {
            $table->integer('jumlah_lowongan');
            $table->unsignedInteger('id_perusahaan');
            $table->foreign('id_perusahaan')->references('id')->on('perusahaans')->onDelete('CASCADE');
            $table->unsignedInteger('id_pelamarankerja');
            $table->foreign('id_pelamarankerja')->references('id')->on('pelamarankerjas')->onDelete('CASCADE');
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
        Schema::dropIfExists('daftarlokers');
    }
}
