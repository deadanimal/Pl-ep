<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaItemInfosTable extends Migration
{
    public function up()
    {
        Schema::create('fiza_item_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('katalog_id')->nullable();
            $table->foreignId('pembekal_id')->nullable();
            $table->string('item_name')->nullable();
            $table->string('item_price')->nullable();
            $table->string('item_unit')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();
            $table->string('item_updated_by')->nullable();
            $table->string('item_created_by')->nullable();
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
