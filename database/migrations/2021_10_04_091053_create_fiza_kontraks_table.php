<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaKontraksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_kontraks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sst_id')->nullable();
            $table->string('kontrak_no_fizikal')->nullable();
            $table->string('kontrak_tempoh_penghantaran')->nullable();
            $table->string('kontrak_pilihan')->nullable();
            $table->foreignId('pembekal_id')->nullable();
            $table->foreignId('pst_id')->nullable();
            $table->string('kontrak_no_rujukan_bon')->nullable();
            $table->string('kontak_institusi_kewangan')->nullable();
            $table->string('kontrak_amaun')->nullable();
            $table->date('kontrak_tarikh_kuatkuasa')->nullable();
            $table->date('kontrak_tarikh_tamat')->nullable();
            $table->string('kontrak_file_bon')->nullable();
            $table->string('kontrak_pelulus')->nullable();
            $table->foreignId('tempoh_id')->nullable();
            $table->string('kontrak_catatan_pelulus')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->timestamps();

            $table->string('cadangan_created_by')->nullable();
            $table->string('cadangan_updated_by')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiza_kontraks');
    }
}
