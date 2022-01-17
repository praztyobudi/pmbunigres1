<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
        });

        Schema::table('pembayaran', function (Blueprint $table) {
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
            $table->string('custCode');
            $table->double('amount');
            $table->string('keterangan')->nullable();
            $table->timestamp('expiredDate');
            $table->boolean('status')->default(0);
            $table->enum('kategori', ['registrasi', 'daftar_ulang']);
            $table->string('no_surat')->nullable()->default(null);
            $table->string('file_bukti')->nullable()->default(null);
            $table->timestamp('dibayar_pada')->nullable()->default(null);
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
        Schema::dropIfExists('pembayaran');
    }
}
