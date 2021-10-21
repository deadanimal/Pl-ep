<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaPermohonanKemaskiniProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_permohonan_kemaskini_profils', function (Blueprint $table) {
            $table->id();
            $table->string('permohonan_description')->nullable();
            $table->foreignId('pembekal_id')->nullable();
            $table->string('permohonan_created_by')->nullable();
            $table->string('permohonan_updated_by')->nullable();




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
        Schema::dropIfExists('fiza_permohonan_kemaskini_profils');
    }
}
