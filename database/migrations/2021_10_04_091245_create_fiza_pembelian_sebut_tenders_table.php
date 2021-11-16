<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaPembelianSebutTendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_pembelian_sebut_tenders', function (Blueprint $table) {
            $table->id();
            $table->String('pst_item_panel')->nullable();
            $table->String('pst_sistem_panel')->nullable();
            $table->String('pst_no1pp')->nullable();
            $table->foreignId('katalog_id')->nullable();
            $table->String('pst_katalog_kumpulan')->nullable();
            $table->String('pst_tajuk')->nullable();
            $table->String('pst_no_rujukan_fail')->nullable();
            $table->String('pst_total_harga_indikatif_jangkaan')->nullable();
            $table->String('pst_kaedah_perolehan')->nullable();
            $table->String('pst_jenis')->nullable();
            $table->String('pst_terbuka_kepada')->nullable();
            $table->String('pst_zon_lokasi')->nullable();
            $table->String('pst_kategori_jenis_perolehan')->nullable();
            $table->String('pst_kategori_perolehan')->nullable();
            $table->String('pst_jenis_kontrak')->nullable();
            $table->String('pst_jenis_pemenuhan')->nullable();
            $table->String('pst_tempoh_kontrak')->nullable();
            $table->foreignId('item_id')->nullable();
            $table->foreignId('kod_id')->nullable();
            $table->foreignId('pembekal_id')->nullable();
            $table->String('pst_jumlah_pembekal_layak')->nullable();
            $table->foreignId('ro_id')->nullable();
            $table->foreignId('jawatankuasa_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->String('pst_pelulus')->nullable();
            $table->String('pst_catatan_pelulus')->nullable();
            $table->String('pst_perihal_taklimat')->nullable();
            $table->date('pst_taklimat_date')->nullable();
            $table->String('pst_taklimat_alamat')->nullable();
            $table->String('pst_link')->nullable();
            $table->String('pst_penyelaras')->nullable();
            $table->String('pst_kehadiran_max')->nullable();
            $table->String('pst_status')->nullable();
            $table->String('pst_jenis_potongan')->nullable();
            $table->String('pst_potongan_description')->nullable();
            $table->String('pst_amaun_potongan')->nullable();
            $table->String('created_by')->nullable();
            $table->String('updated_by')->nullable();

 
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
        Schema::dropIfExists('fiza_pembelian_sebut_tenders');
    }
}
