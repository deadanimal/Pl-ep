<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaPertanyaanItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_pertanyaan_items', function (Blueprint $table) {
            $table->id();

            $table->foreignId('tanya_id')->nullable();
            $table->foreignId('item_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('pembekal_id')->nullable();
            $table->integer('tanya_kuantiti')->nullable();
            $table->integer('tanya_tempoh_penghantaran')->nullable();
            $table->string('tanya_jenis_perolehan')->nullable();
            $table->string('tanya_catatan1')->nullable();
            $table->string('tanya_ketersediaan_stok')->nullable();
            $table->string('tanya_harga_baru')->nullable();
            $table->string('tanya_status')->nullable();

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
        Schema::dropIfExists('fiza_pertanyaan_items');
    }
}
