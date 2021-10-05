<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_roles', function (Blueprint $table) {
            $table->id();
            $table->string('role_name')->nullable();
            $table->string('role_staff_status')->nullable();
            $table->string('role_created_by');
            $table->string('role_updated_by');
            

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
        Schema::dropIfExists('fiza_roles');
    }
}
