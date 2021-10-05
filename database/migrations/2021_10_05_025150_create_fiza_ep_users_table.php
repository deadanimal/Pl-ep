<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaEpUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_ep_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->nullable();
            $table->string('user_identity_type')->nullable();
            $table->string('user_identity_no')->nullable();
            $table->string('user_title')->nullable();
            $table->string('user_name')->nullable();
            $table->string('user_role')->nullable();
            $table->string('user_status')->nullable();
            $table->string('user_citizenship')->nullable();
            $table->string('user_position')->nullable();
            $table->string('user_grade')->nullable();
            $table->string('user_email')->nullable();
            $table->string('user_contact_no')->nullable();
            $table->string('user_fax_no')->nullable();
            $table->string('user_image')->nullable();
            $table->string('user_address')->nullable();
            $table->string('user_postalcode')->nullable();
            $table->string('user_city')->nullable();
            $table->string('user_state')->nullable();
            $table->string('user_current_password')->nullable();
            $table->string('user_new_password')->nullable();
            $table->string('user_new_password2')->nullable();
            $table->foreignId('kod_id')->nullable();
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
        Schema::dropIfExists('fiza_ep_users');
    }
}
