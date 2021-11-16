<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaSenaraiSemakStandardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_senarai_semak_standards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('spesifikasi_id')->nullable();
            $table->string('sss_jenis_spesifikasi')->nullable();
            $table->string('sss__nama_doc')->nullable();
            $table->integer('sss_skor')->nullable();
            $table->integer('sss_skor_maksima')->nullable();
            $table->string('sss_file')->nullable();
            $table->string('sss_status_pematuhan')->nullable();
            $table->string('sss_created_by')->nullable();
            $table->string('sss_updated_by')->nullable();
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
        Schema::dropIfExists('fiza_senarai_semak_standards');
    }
}
