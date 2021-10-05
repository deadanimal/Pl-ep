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
            $table->foreignId('pesanan_id');
            $table->foreignId('pembekal_id');
            $table->foreignId('user_id');
            $table->String('terima_pegawai_pengesah');
            $table->String('terima_catatan');
            $table->String('terima_kuantiti');
            $table->String('terima_amaun');
            $table->String('terima_skor_khidmat_sokongan');
            $table->String('terima_skor_kuantiti');
            $table->String('terima_skor_tempoh_penghantaran');
            $table->foreignId('penghantaran_id');
            $table->foreignId('sst_id');


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
