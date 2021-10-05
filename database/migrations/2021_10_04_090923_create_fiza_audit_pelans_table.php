<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaAuditPelansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_audit_pelans', function (Blueprint $table) {
            $table->id();
            $table->String('audit_pelan_action')->nullable();
            $table->String('audit_pelan_path')->nullable();
            $table->foreignId('pelan_id')->nullable();
            $table->foreignId('laporan_pelan_id')->nullable();
            $table->timestamps();

            $table->string('audit_pelan_created_by');
            $table->string('audit_pelan_updated_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiza_audit_pelans');
    }
}
