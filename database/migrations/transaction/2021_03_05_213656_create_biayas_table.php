<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiayasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biayas', function (Blueprint $table) {
            $table->id();
        });

        Schema::table('biayas', function (Blueprint $table) {
            $table->foreignId('gelombang_id')->references('id')->on('gelombang')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('jalur_masuk_id')->references('id')->on('jalur_masuk')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('kelas_id')->references('id')->on('kelas')->onUpdate('cascade')->onDelete('restrict');
            $table->double('biaya_registrasi')->default(0);
            $table->double('dana_pengembangan')->default(0);
            $table->double('dana_kemahasiswaan')->default(0);
            $table->double('buku_pedoman_akademik')->default(0);
            $table->double('buku_pedoman_kompetensi')->default(0);
            $table->double('seragam')->default(0);
            $table->double('total_daftar_ulang')->default(0);
            $table->boolean('hijab')->default(false);
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
        Schema::dropIfExists('biayas');
    }
}
