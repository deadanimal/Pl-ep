<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaArahanMemberhentikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_arahan_memberhentikans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pesanan_id')->nullable();
            $table->foreignId('sst_id')->nullable();
            $table->foreignId('pembekal_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->String('arahan_justifikasi')->nullable();
            $table->String('arahan_keterangan')->nullable();
            $table->foreignId('terima_id')->nullable();
            $table->foreignId('penghantaran_id')->nullable();
            $table->String('arahan_oleh')->nullable();
            $table->String('arahan_pelulus')->nullable();
            $table->String('arahan_catatan')->nullable();
            $table->string('arahan_created_by');
            $table->string('arahan_updated_by');







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
        Schema::dropIfExists('fiza_arahan_memberhentikans');
    }
}
