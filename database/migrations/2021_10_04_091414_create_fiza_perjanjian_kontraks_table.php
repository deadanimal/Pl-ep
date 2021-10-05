<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaPerjanjianKontraksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_perjanjian_kontraks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perjanjian_id')->nullable();
            $table->foreignId('sst_id')->nullable();
            $table->foreignId('kandungan_id')->nullable();
            $table->string('perjanjian_file')->nullable();//file
            $table->string('perjanjian_pelulus')->nullable();
            $table->string('perjanjian_catatan_pelulus')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('pembekal_id')->nullable();

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
        Schema::dropIfExists('fiza_perjanjian_kontraks');
    }
}
