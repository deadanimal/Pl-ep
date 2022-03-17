<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaPenyediaanSpesifikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_penyediaan_spesifikasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pst_id')->nullable();
            $table->string('spesifikasi_tajuk')->nullable();
            $table->string('spesifikasi_jenis_barang')->nullable();
            $table->string('spesifikasi_status')->nullable();
            $table->string('spesifikasi_description')->nullable();
            $table->foreignId('spesifikasi_unit_ukuran')->nullable();
            $table->string('spesifikasi_jenis_harga')->nullable();
            $table->string('spesifikasi_jumlah_harga_indikatif')->nullable();
            $table->string('spesifikasi_jumlah_harga')->nullable();
            $table->integer('spesifikasi_skor_maksima')->nullable();
            $table->integer('spesifikasi_jumlah_skor_teknikal')->nullable();
            $table->integer('spesifikasi_skor_lulus_teknikal')->nullable();
            $table->string('spesifikasi_skema_teknikal')->nullable();
            $table->string('spesifikasi_jumlah_skor_kewangan')->nullable();
            $table->integer('spesifikasi_skor_lulus_kewangan')->nullable();
            $table->string('spesifikasi_skema_kewangan')->nullable();//file
            $table->integer('spesifikasi_skor_lulus_keseluruhan')->nullable();
            $table->string('spesifikasi_alamat_penghantaran')->nullable();
            $table->string('spesifikasi_catatan')->nullable();
            $table->string('spesifikasi_created_by')->nullable();
            $table->string('spesifikasi_updated_by')->nullable();


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
        Schema::dropIfExists('fiza_penyediaan_spesifikasis');
    }
}
