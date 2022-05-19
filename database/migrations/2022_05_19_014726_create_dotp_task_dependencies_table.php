<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpTaskDependenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_task_dependencies', function (Blueprint $table) {
            $table->integer('dependencies_task_id');
            $table->integer('dependencies_req_task_id');

            $table->primary(['dependencies_task_id', 'dependencies_req_task_id'], 'dep_task_id_req_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_task_dependencies');
    }
}
