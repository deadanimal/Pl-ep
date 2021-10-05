<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaSupportingDocumentPembekalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_supporting_document_pembekals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pembekal_id')->nullable();
            $table->string('sdoc_name')->nullable();
            $table->timestamps();
            $table->string('sdoc_created_by');
            $table->string('sdoc_updated_by');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiza_supporting_document_pembekals');
    }
}
