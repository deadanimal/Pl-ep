<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('sijil_id');
            $table->string('payment_amount')->nullable();
            $table->date('payment_date')->nullable();
            $table->timestamp('payment_time')->nullable();
            $table->foreignId('pembekal_id')->nullable();
            $table->string('payment_created_by');
            $table->string('payment_updated_by');


            
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
        Schema::dropIfExists('fiza_payments');
    }
}
