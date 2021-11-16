<?php

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
            $table->string('jawatankuasa_spesifikasi')->nullable();
            $table->string('jawatankuasa_teknikal')->nullable();
            $table->string('jawatankuasa_kewangan')->nullable();
            $table->string('jawatankuasa_kerja')->nullable();
            $table->string('jawatankuasa_terbuka')->nullable();
            $table->string('jawatankuasa_penilaian')->nullable();
            // $table->String('jawatankuasa_peranan')->nullable();
            $table->foreignId('pst_id')->nullable();
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
