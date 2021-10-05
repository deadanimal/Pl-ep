<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaPadananBayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_padanan_bayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pesanan_id')->nullable();
            $table->foreignId('sst_id')->nullable();
            $table->foreignId('pembekal_id')->nullable();
            $table->String('padanan_perihal_pembayaran')->nullable();
            $table->String('padanan_jenis_potongan')->nullable();
            $table->String('padanan_perihal_potongan')->nullable();
            $table->String('padanan_klausa_rujukan')->nullable();
            $table->String('padanan_cara_pembayaran')->nullable();
            $table->String('padanan_kod_akaun')->nullable();
            $table->String('padanan_amaun')->nullable();
            $table->foreignId('user_id')->nullable();


            

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
        Schema::dropIfExists('fiza_padanan_bayarans');
    }
}
