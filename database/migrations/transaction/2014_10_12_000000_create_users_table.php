<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('permission_id')->default(2)->references('id')->on('permissions')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('prodi_id')->nullable()->references('id')->on('prodi')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('jalur_masuk_id')->nullable()->references('id')->on('jalur_masuk')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('jam_masuk_id')->nullable()->references('id')->on('jam_masuks')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('gelombang_id')->nullable()->references('id')->on('gelombang')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('kelas_id')->nullable()->references('id')->on('kelas')->onUpdate('cascade')->onDelete('restrict');
            $table->string('nama');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('no_telepon')->nullable();
            $table->boolean('tes_kesehatan')->default(false);
            $table->timestamp('tes_kesehatan_at')->nullable()->default(null);
            // TODO: Remove lulusan_unigres from related files/classes/functions
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
