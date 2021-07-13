<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUlasanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ulasan', function (Blueprint $table) {
            $table->bigIncrements('id_ulasan');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id_user')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('lokasi_id');
            $table->foreign('lokasi_id')->references('id_lokasi')->on('lokasi')->onDelete('cascade')->onUpdate('cascade');
            $table->text('ulasan')->nullable();
            $table->text('kritik')->nullable();
            $table->integer('rating')->nullable();
            $table->enum('verifikasi', ['done', 'not'])->default('not');
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
        Schema::dropIfExists('ulasan');
    }
}
