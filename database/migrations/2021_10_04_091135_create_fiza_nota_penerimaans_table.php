<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaNotaPenerimaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_nota_penerimaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pesanan_id')->nullable();
            $table->foreignId('pembekal_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->String('terima_pegawai_pengesah')->nullable();
            $table->String('terima_catatan')->nullable();
            $table->String('terima_kuantiti')->nullable();
            $table->String('terima_amaun')->nullable();
            $table->String('terima_skor_khidmat_sokongan')->nullable();
            $table->String('terima_skor_kuantiti')->nullable();
            $table->String('terima_skor_tempoh_penghantaran')->nullable();
            $table->foreignId('penghantaran_id')->nullable();
            $table->foreignId('sst_id')->nullable();


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
        Schema::dropIfExists('fiza_nota_penerimaans');
    }
}
