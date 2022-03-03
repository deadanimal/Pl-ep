<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaPerincianPengiklanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_perincian_pengiklanans', function (Blueprint $table) {
            $table->id();
            $table->date('iklan_date')->nullable(); 
            $table->date('iklan_taklimat_date')->nullable();
            $table->time('iklan_taklimat_time')->nullable();
            $table->string('iklan_tempoh')->nullable();
            $table->date('iklan_last_date')->nullable();
            $table->integer('iklan_tempoh_sah_laku')->nullable();
            $table->date(' iklan_sah_laku_tamat')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('pst_id')->nullable();
            $table->string('iklan_created_by')->nullable();
            $table->string('iklan_updated_by')->nullable();
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
        Schema::dropIfExists('fiza_perincian_pengiklanans');
    }
}
