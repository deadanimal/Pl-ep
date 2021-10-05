id<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pembekal_id')->nullable();
            $table->foreignId('sst_id')->nullable();
            $table->foreignId('pesanan_id')->nullable();
            $table->foreignId('terima_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('invoice_created_by');
            $table->string('invoice_updated_by');



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
        Schema::dropIfExists('fiza_invoices');
    }
}
