<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaKodBidangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_kod_bidangs', function (Blueprint $table) {
            $table->id();
            $table->string('kod_type')->nullable();
            $table->string('kod_category')->nullable();
            $table->string('kod_pengkhususan')->nullable();
            $table->string('kod_description')->nullable();
            $table->string('kod_created_by')->nullable();
            $table->string('kod_updated_by')->nullable();


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
        Schema::dropIfExists('fiza_kod_bidangs');
    }
}
