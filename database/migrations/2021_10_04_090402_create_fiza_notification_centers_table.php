<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFizaNotificationCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiza_notification_centers', function (Blueprint $table) {
            $table->id();
            $table->string('noti_type')->nullable();
            $table->string('noti_template')->nullable();
            $table->string('noti_subject')->nullable();
            $table->string('noti_content')->nullable();
            $table->string('noti_status')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('noti_created_by')->nullable();
            $table->string('noti_updated_by')->nullable();
            


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
        Schema::dropIfExists('fiza_notification_centers');
    }
}
