<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('email')->unique();
            $table->string('user_identity_no')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('jenis', ['pekerja', 'pembekal', 'juruaudit']);
            $table->string('password');
            $table->string('user_status')->nullable();
            $table->string('user_jenis_pengenalan')->nullable();
            $table->string('user_kewarganegaraan')->nullable();
            $table->string('user_alamat')->nullable();
            $table->string('user_poskod')->nullable();
            $table->string('user_negeri')->nullable();
            $table->string('user_phone')->nullable();
            $table->string('user_fax')->nullable();
            $table->rememberToken();
            $table->timestamps();

            //$table->foreignId('role_id')->nullable();
            // $table->string('user_identity_type')->nullable();
            // $table->string('user_identity_no')->nullable();
            // $table->string('user_title')->nullable();
            // $table->string('user_name')->nullable();
            // $table->string('user_role')->nullable();//$table->enum('jenis', ['pekerja', 'pembekal', 'juruaudit']);
            // $table->string('user_status')->nullable();
            // $table->string('user_citizenship')->nullable();
            // $table->string('user_position')->nullable();
            // $table->string('user_grade')->nullable();
            // $table->string('user_email')->nullable();
            // $table->string('user_contact_no')->nullable();
            // $table->string('user_fax_no')->nullable();
            // $table->string('user_image')->nullable();
            // $table->string('user_address')->nullable();
            // $table->string('user_postalcode')->nullable();
            // $table->string('user_city')->nullable();
            // $table->string('user_state')->nullable();
            // $table->string('user_current_password')->nullable();
            // $table->string('user_new_password')->nullable();
            // $table->string('user_new_password2')->nullable();
            // $table->foreignId('kod_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
