<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpUserTaskPinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_user_task_pin', function (Blueprint $table) {
            $table->integer('user_id')->default(0);
            $table->integer('task_id')->default(0);
            $table->boolean('task_pinned')->default(1);
            
            $table->primary(['user_id', 'task_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_user_task_pin');
    }
}
