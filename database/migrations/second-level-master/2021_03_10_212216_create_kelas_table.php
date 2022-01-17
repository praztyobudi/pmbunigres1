<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('prodi_id');
        });

        Schema::table('kelas', function (Blueprint $table) {
            $table->foreignId('prodi_id')->references('id')->on('prodi')->onUpdate('cascade')->onDelete('restrict');
            $table->string('kelas');
            $table->boolean('tes_kesehatan')->default(false);
            $table->string('keterangan_tes_kesehatan')->nullable(true);
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
        Schema::dropIfExists('kelas');
    }
}
