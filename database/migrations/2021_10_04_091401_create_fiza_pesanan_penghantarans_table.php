<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaPesananPenghantaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_pesanan_penghantarans', function (Blueprint $table) {
            $table->id();
           $table->foreignId('pesanan_id')->nullable();
           $table->foreignId('user_id')->nullable();
           $table->foreignId('pembekal_id')->nullable();
           $table->foreignId('sst_id')->nullable();
           $table->integer('penghantaran_kuantiti')->nullable();
           $table->date('penghantaran_date')->nullable();
            $table->timestamps();
           $table->string('penghantaran_created_by')->nullable();
           $table->string('penghantaran_updated_by')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiza_pesanan_penghantarans');
    }
}
