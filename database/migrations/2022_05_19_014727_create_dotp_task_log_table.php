<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpTaskLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_task_log', function (Blueprint $table) {
            $table->integer('task_log_id')->primary();
            $table->integer('task_log_task')->default(0)->index('idx_log_task');
            $table->string('task_log_name')->nullable();
            $table->text('task_log_description')->nullable();
            $table->integer('task_log_creator')->default(0);
            $table->float('task_log_hours')->default(0);
            $table->dateTime('task_log_date')->nullable();
            $table->string('task_log_costcode', 8)->default('');
            $table->boolean('task_log_problem')->default(0);
            $table->boolean('task_log_reference')->default(0);
            $table->string('task_log_related_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_task_log');
    }
}
