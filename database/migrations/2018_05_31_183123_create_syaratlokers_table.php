<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSyaratlokersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syaratlokers', function (Blueprint $table) {
            $table->increments('id');
            $table->text('deskripsi');
            $table->UnsignedInteger('id_lowongan');
            $table->foreign('id_lowongan')->references('id')->on('lowongans')->ondelete('cascade');
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
        Schema::dropIfExists('syaratlokers');
    }
}
