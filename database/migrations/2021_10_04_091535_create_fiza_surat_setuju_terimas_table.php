<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaSuratSetujuTerimasTable extends Migration
{
   
    public function up()
    {
        Schema::create('fiza_surat_setuju_terimas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pembekal_id')->nullable();
            $table->string('sst_tajuk')->nullable();
            $table->foreignId('pst_id')->nullable();
            $table->string('sst_insurans_jaminan')->nullable();
            $table->string('sst_bon')->nullable();
            $table->string('sst_semakan')->nullable();
            $table->string('sst_sl1m')->nullable();
            $table->string('sst_pentadbir_kontrak')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('sst_perjanjian')->nullable();
            $table->string('sst_file')->nullable();
            $table->string('sst_penandatangan')->nullable();
            $table->string('sst_pelulus')->nullable();
            $table->string('sst_catatan_pelulus')->nullable();
            $table->string('sst_no_akaun')->nullable();
            $table->string('sst_nama_bank')->nullable();
            $table->string('sst_harga_cadangan_tawaran')->nullable();
            $table->string('sst_amaun_cbp')->nullable();
            $table->string('sst_amaun_keseluruhan')->nullable();
            $table->string('sst_nama_saksi')->nullable();
            $table->string('sst_no_pengenalan')->nullable();
            $table->string('sst_jawatan')->nullable();
            $table->string('sst_alamat')->nullable();
            $table->string('sst_no_tel')->nullable();
            $table->string('sst_no_fax')->nullable();
            $table->string('sst_email')->nullable();
            $table->string('item_id')->nullable();
            $table->string('sst_jenis_potongan')->nullable();
            $table->string('sst_amaun_potongan')->nullable();
            $table->string('sst_created_by')->nullable();
            $table->string('sst_updated_by')->nullable();

            $table->foreignId('akhir_id')->nullable();
            $table->foreignId('jadual_id')->nullable();
            $table->foreignId('niat_id')->nullable();

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
        Schema::dropIfExists('fiza_surat_setuju_terimas');
    }
}
