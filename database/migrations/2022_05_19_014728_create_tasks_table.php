<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->integer('task_id')->primary();
            $table->string('task_name')->nullable();
            $table->integer('task_parent')->default(0)->index('idx_task_parent');
            $table->boolean('task_milestone')->default(0);
            $table->integer('task_project')->default(0)->index('idx_task_project');
            $table->integer('task_owner')->default(0)->index('idx_task_owner');
            $table->dateTime('task_start_date')->nullable()->index('idx_task1');
            $table->float('task_duration')->unsigned()->default(0);
            $table->integer('task_duration_type')->default(1);
            $table->float('task_hours_worked')->unsigned()->default(0);
            $table->dateTime('task_end_date')->nullable()->index('idx_task2');
            $table->integer('task_status')->default(0);
            $table->boolean('task_priority')->default(0);
            $table->boolean('task_percent_complete')->default(0);
            $table->text('task_description')->nullable();
            $table->decimal('task_target_budget', 10, 2)->default(0.00);
            $table->string('task_related_url')->nullable();
            $table->integer('task_creator')->default(0);
            $table->integer('task_order')->default(0)->index('idx_task_order');
            $table->boolean('task_client_publish')->default(0);
            $table->boolean('task_dynamic')->default(0);
            $table->integer('task_access')->default(0);
            $table->integer('task_notify')->default(0);
            $table->char('task_departments', 100)->nullable();
            $table->char('task_contacts', 100)->nullable();
            $table->longText('task_custom')->nullable();
            $table->smallInteger('task_type')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
