<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaPesananTempatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_pesanan_tempatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('pembekal_id')->nullable();
            $table->string('pesanan_perihal')->nullable();
            $table->string('pesanan_kategori_jenis_perolehan')->nullable();
            $table->integer('pesanan_tempoh_penghantaran')->nullable();
            $table->date('pesanan_tarikh_mula date')->nullable();
            $table->date('pesanan_tarikh_akhir')->nullable();
            $table->date('pesanan_tarikh_lulus')->nullable();
            $table->string('pesanan_alamat_pengantaran')->nullable();
            $table->foreignId('kart_id')->nullable();
            $table->timestamps();
            $table->string('pesanan_created_by')->nullable();
            $table->string('pesanan_updated_by')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiza_pesanan_tempatans');
    }
}
