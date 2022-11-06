<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_tasks', function (Blueprint $table) {
            $table->integer('user_id')->default(0);
            $table->boolean('user_type')->default(0)->index('user_type');
            $table->integer('task_id')->default(0)->index('idx_user_tasks');
            $table->integer('perc_assignment')->default(100);
            $table->boolean('user_task_priority')->default(0);

            $table->primary(['user_id', 'task_id']);
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
        Schema::dropIfExists('user_tasks');
    }
}
