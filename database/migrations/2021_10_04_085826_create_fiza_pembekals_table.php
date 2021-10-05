<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaPembekalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_pembekals', function (Blueprint $table) {
            $table->id();
            $table->string('pembekal_jenis_akaun')->nullable();
            $table->string('pembekal_jenis')->nullable();
            $table->string('pembekal_jenis_company')->nullable();
            $table->string('pembekal_no_pendaftaran')->nullable();
            $table->string('pembekal_pemilik')->nullable();
            $table->string('pembekal_citizenship')->nullable();
            $table->string('pembekal_identity_type')->nullable();
            $table->string('pembekal_identity_no')->nullable();
            $table->string('pembekal_company_name')->nullable();
            $table->date('pembekal_establish_date')->nullable();
            $table->string('pembekal_income_tax_no')->nullable();
            $table->string('pembekal_company_address')->nullable();
            $table->string('pembekal_city')->nullable();
            $table->string('pembekal_postcode')->nullable();
            $table->string('pembekal_state')->nullable();
            $table->string('pembekal_country')->nullable();
            $table->string('pembekal_tel_no')->nullable();
            $table->string('pembekal_fax_no')->nullable();
            $table->string('pembekal_cbp_no')->nullable();
            $table->date('pembekal_cbp_effective_date')->nullable();
            $table->date('pembekal_cbp_approval_date')->nullable();
            $table->date('pembekal_cbp_end_date')->nullable();
            $table->string('pembekal_jenis_perniagaan')->nullable();
            $table->string('pembekal_bank')->nullable();
            $table->string('pembekal_akaun_no')->nullable();
            $table->string('pembekal_amaun_yuran')->nullable();
            $table->string('pembekal_yuran_status')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('kod_id')->nullable();
            $table->string('pembekal_created_by');
            $table->string('pembekal_updated_by');
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
        Schema::dropIfExists('fiza_pembekals');
    }
}
