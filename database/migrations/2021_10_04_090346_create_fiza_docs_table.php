<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_docs', function (Blueprint $table) {
            $table->id();
            $table->string('doc_section')->nullable();
            $table->string('doc_name')->nullable();
            $table->string('doc_description')->nullable();
            $table->string('doc_status')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('doc_created_by');
            $table->string('doc_updated_by');


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
        Schema::dropIfExists('fiza_docs');
    }
}
