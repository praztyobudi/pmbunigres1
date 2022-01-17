<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengumumanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengumuman', function (Blueprint $table) {
            $table->id();
        });

        Schema::table('pengumuman', function (Blueprint $table) {
            $table->foreignId('petugas_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->string('judul');
            $table->string('deskripsi');
            $table->string('file_url')->nullable(true);
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
        Schema::dropIfExists('pengumuman');
    }
}
