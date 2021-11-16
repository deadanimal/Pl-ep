<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaPengesyoransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_pengesyorans', function (Blueprint $table) {
            $table->id();
            $table->date('syor_mesyuarat_date')->nullable();
            $table->String('syor_mesyuarat_place')->nullable();
            $table->foreignId('jawatankuasa_id')->nullable();
            $table->String('syor_kertas_taklimat')->nullable();
            $table->foreignId('pembekal_id')->nullable();
            $table->String('syor_kedudukan_pembekal')->nullable();
            $table->String('syor_catatan')->nullable();
            $table->String('syor_jumlah_skor')->nullable();
            $table->foreignId('pst_id')->nullable();
            $table->foreignId('spesifikasi_id')->nullable();
            $table->string('syor_created_by')->nullable();
            $table->string('syor_updated_by')->nullable();

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
        Schema::dropIfExists('fiza_pengesyorans');
    }
}
