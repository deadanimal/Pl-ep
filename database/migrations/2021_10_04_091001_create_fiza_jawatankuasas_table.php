<?php

use App\Models\FizaPembelianSebutTender;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaJawatankuasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_jawatankuasas', function (Blueprint $table) {
            $table->id();
            // $table->String('jenis_jawatankuasa')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('jawatankuasa_spesifikasi_pengerusi')->nullable();
            $table->string('jawatankuasa_spesifikasi_ajk')->nullable();
            $table->string('jawatankuasa_spesifikasi_urusetia')->nullable();
            $table->string('jawatankuasa_teknikal_pengerusi')->nullable();
            $table->string('jawatankuasa_teknikal_ajk')->nullable();
            $table->string('jawatankuasa_kewangan_pengerusi')->nullable();
            $table->string('jawatankuasa_kewangan_ajk')->nullable();
            $table->string('jawatankuasa_kerja_pengerusi')->nullable();
            $table->string('jawatankuasa_kerja_ajk')->nullable();
            $table->string('jawatankuasa_terbuka_pengerusi')->nullable();
            $table->string('jawatankuasa_terbuka_ajk')->nullable();
            $table->string('jawatankuasa_penilaian_pengerusi')->nullable();
            $table->string('jawatankuasa_penilaian_ajk')->nullable();
            // $table->String('jawatankuasa_peranan')->nullable();
            $table->string('jawatankuasa_kelulusan')->nullable();
            $table->foreignId('pst_id');
            $table->timestamps();
            $table->string('jawatankuasa_created_by')->nullable();
            $table->string('jawatankuasa_updated_by')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiza_jawatankuasas');
    }
}
