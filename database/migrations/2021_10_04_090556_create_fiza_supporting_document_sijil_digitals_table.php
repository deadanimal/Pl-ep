<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaSupportingDocumentSijilDigitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_supporting_document_sijil_digitals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sijil_id')->nullable();
            $table->string('sd_name')->nullable();
            $table->string('sd_created_by');
            $table->string('sd_updated_by');
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
        Schema::dropIfExists('fiza_supporting_document_sijil_digitals');
    }
}
