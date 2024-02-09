<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrasis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_administrasi', 10);
            $table->date('tanggal');
            $table->integer('pasien_id')->length(10);
            $table->integer('dokter_id')->length(10);
            $table->integer('biaya')->length(10);
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
        Schema::dropIfExists('administrasis');
    }
}
