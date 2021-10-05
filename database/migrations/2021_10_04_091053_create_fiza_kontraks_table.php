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
            $table->foreignId('sst_id')->nullable;
            $table->string('kontrak_no_fizikal');
            $table->string('kontrak_tempoh_penghantaran');
            $table->string('kontrak_pilihan');
            $table->foreignId('pembekal_id');
            $table->foreignId('pst_id');
            $table->string('kontrak_no_rujukan_bon');
            $table->string('kontak_institusi_kewangan');
            $table->string('kontrak_amaun');
            $table->date('kontrak_tarikh_kuatkuasa');
            $table->date('kontrak_tarikh_tamat');
            $table->string('kontrak_file_bon');
            $table->string('kontrak_pelulus');
            $table->foreignId('tempoh_id');
            $table->string('kontrak_catatan_pelulus');
            $table->foreignId('user_id');
            $table->timestamps();

            $table->string('cadangan_created_by');
            $table->string('cadangan_updated_by');

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
