<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAccessLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_access_log', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('user_ip', 15);
            $table->dateTime('date_time_in');
            $table->dateTime('date_time_out');
            $table->dateTime('date_time_last_action');
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
        Schema::dropIfExists('user_access_log');
    }
}
