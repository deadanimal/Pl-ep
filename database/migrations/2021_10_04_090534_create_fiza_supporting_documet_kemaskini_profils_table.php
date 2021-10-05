<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaSupportingDocumetKemaskiniProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_supporting_documet_kemaskini_profils', function (Blueprint $table) {
            $table->id();
            $table->string('pkp_doc_name')->nullable();
            $table->string('pkp_doc_catatan')->nullable();
            $table->string('pkp_doc_status_terima')->nullable();
            $table->foreignId('permohonan_id')->nullable();
            $table->string('pkp_created_by');
            $table->string('pkp_updated_by');


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
        Schema::dropIfExists('fiza_supporting_documet_kemaskini_profils');
    }
}
