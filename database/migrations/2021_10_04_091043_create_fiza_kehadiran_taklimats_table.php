<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaKehadiranTaklimatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_kehadiran_taklimats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pst_id')->nullable();
            $table->foreignId('pembekal_id')->nullable();
            $table->String('kehadiran_nama')->nullable();
            $table->String('kehadiran_pengenalan_no')->nullable();
            $table->String('kehadiran_no_tel')->nullable();
            $table->String('kehadiran_email')->nullable();
            $table->String('status')->nullable();
            $table->String('link')->nullable();

            $table->string('kehadiran_created_by')->nullable();
            $table->string('kehadiran_updated_by')->nullable();

            
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
        Schema::dropIfExists('fiza_kehadiran_taklimats');
    }
}
