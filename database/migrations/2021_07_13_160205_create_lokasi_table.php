<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi', function (Blueprint $table) {
            $table->bigIncrements('id_lokasi');
            $table->string('nama_lokasi', 100);
            $table->text('desc_lokasi');
            $table->string('ket_lokasi', 100);
            $table->string('maps_lokasi', 1000);
            $table->string('jenis_lokasi', 10);
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
        Schema::dropIfExists('lokasi');
    }
}
