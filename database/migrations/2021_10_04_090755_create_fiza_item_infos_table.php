<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaItemInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_item_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('katalog_id');
            $table->foreignId('pembekal_id)');
            $table->string('item_name')->nullable();
            $table->string('item_price')->nullable();
            $table->string('unit')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();
            $table->string('item_updated_by');
            $table->string('item_created_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiza_item_infos');
    }
}
