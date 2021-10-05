<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaTetapanTempohsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_tetapan_tempohs', function (Blueprint $table) {
            $table->id();
            $table->string('tempoh_type')->nullable();
            $table->integer('tempoh_hari')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('tempoh_created_by');
            $table->string('tempoh_updated_by');



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
        Schema::dropIfExists('fiza_tetapan_tempohs');
    }
}
