<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_laporans', function (Blueprint $table) {
            $table->id();
            $table->String('laporan_nama')->nullable();
            $table->String('laporan_file')->nullable();
            $table->String('laporan_modul')->nullable();
            $table->foreignId('perjanjian_id')->nullable();
            $table->string('laporan_created_by')->nullable();
            $table->string('laporan_updated_by')->nullable();

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
        Schema::dropIfExists('fiza_laporans');
    }
}
