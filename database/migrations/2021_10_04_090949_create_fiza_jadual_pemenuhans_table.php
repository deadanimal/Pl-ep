<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaJadualPemenuhansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_jadual_pemenuhans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('spesifikasi_id');
            $table->String('jadual_jenis_pemenuhan')->nullable();
            $table->String('jadual_kekerapan')->nullable();
            $table->String('jadual_bil')->nullable();
            $table->String('jadual_bulan_mula')->nullable();
            $table->String('jadual_tahun_mula')->nullable();
            $table->String('jadual_bulan_akhir')->nullable();
            $table->String('jadual_tahun_akhir')->nullable();
            $table->String('jadual_jumlah_bulan')->nullable();
            $table->String('jadual_jenis')->nullable();

            $table->timestamps();
            $table->string('jadual_created_by');
            $table->string('jadual_updated_by');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiza_jadual_pemenuhans');
    }
}
