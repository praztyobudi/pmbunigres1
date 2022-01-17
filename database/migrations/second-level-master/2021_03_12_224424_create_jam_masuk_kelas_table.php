<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJamMasukKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jam_masuk_kelas', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('kelas_id');
//            $table->unsignedBigInteger('jam_masuk_id');
        });

        Schema::table('jam_masuk_kelas', function (Blueprint $table) {
            $table->foreignId('kelas_id')->references('id')->on('kelas')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('jam_masuk_id')->references('id')->on('jam_masuks')->onUpdate('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('jam_masuk_kelas');
    }
}
