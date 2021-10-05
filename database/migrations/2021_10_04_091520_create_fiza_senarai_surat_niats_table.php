<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaSenaraiSuratNiatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_senarai_surat_niats', function (Blueprint $table) {
            $table->id();
            $table->string('niat_tajuk')->nullable();
            $table->foreignId('pembekal_id')->nullable();
            $table->string('niat_lokasi_rundingan')->nullable();
            $table->date('niat_tarikh_rundingan')->nullable();
            $table->string('niat_catatan_rundingan')->nullable();
            $table->string('niat_terma_rundingan')->nullable();
            $table->string('niat_penandatangan')->nullable();
            $table->string('niat_jawatan')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('niat_pelulus')->nullable();
            $table->string('niat_status')->nullable();
            $table->string('niat_file')->nullable();
            $table->foreignId('akhir_id')->nullable();
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
        Schema::dropIfExists('fiza_senarai_surat_niats');
    }
}
