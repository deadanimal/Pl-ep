<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaPenandatanganKontraksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_penandatangan_kontraks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pembekal_id');
            $table->foreignId('user_id');
            $table->String('penandatangan_pihak');
            $table->foreignId('perjanjian_id');

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
        Schema::dropIfExists('fiza_penandatangan_kontraks');
    }
}
