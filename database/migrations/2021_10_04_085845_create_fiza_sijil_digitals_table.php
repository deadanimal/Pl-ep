<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaSijilDigitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_sijil_digitals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('sijil_peranan')->nullable();
            $table->integer('sijil_doc_id')->nullable();
            $table->string('sijil_mode_yuran')->nullable();
            $table->string('sijil_yuran')->nullable();
            $table->string('sijil_cbp')->nullable();
            $table->string('sijil_jumlah_yuran')->nullable();
            $table->string('yuran_status')->nullable();
            $table->string('sijil_created_by')->nullable();
            $table->string('sijil_updated_by')->nullable();



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
        Schema::dropIfExists('fiza_sijil_digitals');
    }
}
