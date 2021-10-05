<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaKatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_katalogs', function (Blueprint $table) {
            $table->id();
            $table->string('katalog_kategori')->nullable();
            $table->string('katalog_kumpulan')->nullable();
            $table->string('katalog_jenis')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('katalog_created_by');
            $table->string('katalog_updated_by');

       

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
        Schema::dropIfExists('fiza_katalogs');
    }
}
