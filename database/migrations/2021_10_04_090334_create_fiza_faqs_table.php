<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_faqs', function (Blueprint $table) {
            $table->id();
            $table->string('faq_section')->nullable();
            $table->longText('faq_question')->nullable();
            $table->longText('faq_answer')->nullable();
            $table->string('faq_status')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('faq_created_by')->nullable();
            $table->string('faq_updated_by')->nullable();


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
        Schema::dropIfExists('fiza_faqs');
    }
}
