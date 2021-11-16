<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaPemilihanAkhirPembekalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_pemilihan_akhir_pembekals', function (Blueprint $table) {
            $table->id();
            $table->date('akhir_mesyuarat_date')->nullable();
            $table->String('akhir_mesyuarat_place')->nullable();
            $table->String('akhir_mesyuarat_status')->nullable();
            $table->String('akhir_mesyuarat_catatan')->nullable();
            $table->foreignId('jawatankuasa_id')->nullable();
            $table->String('akhir_kehadiran')->nullable();
            $table->String('akhir_keputusan_mesyuarat')->nullable();
            $table->String('akhir_pilihan')->nullable();
            $table->foreignId('pembekal_id')->nullable();
            $table->foreignId('syor_id')->nullable();
            $table->foreignId('pst_id')->nullable();
            $table->timestamps();
            $table->string('akhir_created_by')->nullable();
            $table->string('akhir_updated_by')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiza_pemilihan_akhir_pembekals');
    }
}
