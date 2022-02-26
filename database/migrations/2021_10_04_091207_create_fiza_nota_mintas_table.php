<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaNotaMintasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_nota_mintas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pembekal_id')->nullable();
            $table->String('ro_kaedah')->nullable();
            $table->String('ro_jenis_perolehan')->nullable();
            $table->String('ro_tempoh_penghantaran')->nullable();
            $table->String('ro_jumlah')->nullable();
            $table->String('ro_pelulus')->nullable();
            $table->String('ro_pelulus_catatan')->nullable();
            $table->date('ro_pelulus_date')->nullable();
            $table->String('ro_status')->nullable();
            $table->string('ro_created_by')->nullable();
            $table->string('ro_updated_by')->nullable();
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
        Schema::dropIfExists('fiza_nota_mintas');
    }
}
