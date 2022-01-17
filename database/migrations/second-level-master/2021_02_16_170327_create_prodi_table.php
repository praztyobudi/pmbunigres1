<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodi', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('jenjang_id');
//            $table->unsignedBigInteger('fakultas_id')->nullable(true);
        });

        Schema::table('prodi', function (Blueprint $table) {
            $table->foreignId('jenjang_id')->references('id')->on('jenjang')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('fakultas_id')->references('id')->on('fakultas')->onUpdate('cascade')->onDelete('restrict');
            $table->string('kode_prodi_nim');
            $table->string('kode_prodi_siakad');
            $table->string('nama');
            $table->string('link_grup')->nullable(true);
            $table->string('link_tpa')->nullable(true);
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
        Schema::dropIfExists('prodi');
    }
}
