<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaKartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_karts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_kod')->nullable();
            $table->foreignId('nota_id')->nullable();
            $table->boolean('aktif')->default(true);
            $table->foreignId('kart_kuantiti')->nullable();
            $table->foreignId('pembekal_id')->nullable();
            $table->string('kart_justifikasi')->nullable();
            $table->foreignId('tanya_id')->nullable();
            $table->string('kart_created_by')->nullable();
            $table->string('kart_updated_by')->nullable();
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
        Schema::dropIfExists('fiza_karts');
    }
}
