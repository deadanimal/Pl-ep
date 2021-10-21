<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaLaporanPelansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_laporan_pelans', function (Blueprint $table) {
            $table->id();
            $table->string('laporan_pelan_nama')->nullable();
            $table->string('laporan_pelan_modul')->nullable();
            $table->string('laporan_file')->nullable();
            $table->foreignId('pelan_id')->nullable();
            $table->string('laporan_pelan_created_by')->nullable();
            $table->string('laporan_pelan_updated_by')->nullable();


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
        Schema::dropIfExists('fiza_laporan_pelans');
    }
}
