<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaJawatankuasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_jawatankuasas', function (Blueprint $table) {
            $table->id();
            $table->String('jenis_jawatankuasa')->nullable();
            $table->foreignId('user_id');
            $table->String('jawatankuasa_peranan')->nullable();
            $table->foreignId('pst_id');
            $table->timestamps();

            $table->string('jawatankuasa_created_by');
            $table->string('jawatankuasa_updated_by');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiza_jawatankuasas');
    }
}
