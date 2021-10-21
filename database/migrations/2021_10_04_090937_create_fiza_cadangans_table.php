<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaCadangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_cadangans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pembekal_id');
            $table->foreignId('spesifikasi_id');
            $table->foreignId('sss_id');
            $table->date('cadangan_mesyuarat_date')->nullable();
            $table->string('cadangan_mesyuarat_place')->nullable();
            $table->foreignId('jawatankuasa_id');
            $table->string('cadangan_mesyuarat_status')->nullable();
            $table->string('cadangan_kehadiran')->nullable();
            $table->string('cadangan_bil_pembekal_lulus_teknikal')->nullable();
            $table->string('cadangan_bil_pembekal_lulus_kewangan')->nullable();
            $table->string('cadangan_ulasan_penilaian')->nullable();

            $table->string('cadangan_created_by')->nullable();
            $table->string('cadangan_updated_by')->nullable();

            


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
        Schema::dropIfExists('fiza_cadangans');
    }
}
