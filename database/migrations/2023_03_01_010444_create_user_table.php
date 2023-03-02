<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUser2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nik');
            $table->string('nama');
            $table->string('email');
            $table->string('password');
            $table->char('telp');
            $table->enum('jenkel',['laki-laki','perempuan']);
            $table->enum('level',['admin','petugas','user']);
            $table->text('alamat');
            $table->char('rt');
            $table->char('rw');
            $table->char('kode_pos');
            $table->char('province_id');
            $table->char('regency_id');
            $table->char('district_id');
            $table->char('village_id');
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
        Schema::dropIfExists('user2s');
    }
}
