<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaPelanPerancanganPerolehansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_pelan_perancangan_perolehans', function (Blueprint $table) {
            $table->id();
            $table->String('pelan_jenis')->nullable();
            $table->integer('pelan_year')->nullable();
            $table->String('pelan_title')->nullable();
            $table->String('pelan_description')->nullable();
            $table->String('pelan_category')->nullable();
            $table->String('pelan_method')->nullable();
            $table->date('pelan_invitation_date')->nullable();
            $table->double('pelan_estimated_amount')->nullable();
            $table->String('pelan_catatan')->nullable();
            $table->String('pelan_status')->nullable();
            $table->String('pelan_pengesah')->nullable();
            $table->String('pelan_catatan_pengesah')->nullable();
            $table->String('pelan_pelulus')->nullable();
            $table->String('pelan_catatan_pelulus')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('pelan_created_by')->nullable();
            $table->string('pelan_updated_by')->nullable();

            $table->String('pelan_nilai_perolehan_keseluruhan')->nullable();
            $table->String('pelan_peruntukan_tahunan')->nullable();
            $table->String('pelan_tarikh_perlaksanaan_iklan')->nullable();
            $table->String('pelan_tarikh_penyediaan_spesifikasi')->nullable();
            $table->String('pelan_tarikh_penyediaan_doc_tender')->nullable();
            $table->String('pelan_tarikh_penilaian_tender')->nullable();
            $table->String('pelan_tarikh_perlaksanaan_persidangan')->nullable();
            $table->String('pelan_tarikh_sst_dikeluarkan')->nullable();

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
        Schema::dropIfExists('fiza_pelan_perancangan_perolehans');
    }
}
