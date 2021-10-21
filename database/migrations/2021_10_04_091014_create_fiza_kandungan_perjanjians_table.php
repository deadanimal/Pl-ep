<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaKandunganPerjanjiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_kandungan_perjanjians', function (Blueprint $table) {
            $table->id();
            $table->String('kandungan_nama')->nullable();
            $table->String('kandungan_template')->nullable();
            $table->string('kandungan_created_by')->nullable();
            $table->string('kandungan_updated_by')->nullable();

    
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
        Schema::dropIfExists('fiza_kandungan_perjanjians');
    }
}
