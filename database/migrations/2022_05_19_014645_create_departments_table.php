<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('dept_id');
            $table->unsignedInteger('dept_parent')->default(0);
            $table->unsignedInteger('dept_company')->default(0);
            $table->string('dept_name');
            $table->string('dept_phone', 30)->nullable();
            $table->string('dept_fax', 30)->nullable();
            $table->string('dept_address1', 30)->nullable();
            $table->string('dept_address2', 30)->nullable();
            $table->string('dept_city', 30)->nullable();
            $table->string('dept_state', 30)->nullable();
            $table->string('dept_zip', 11)->nullable();
            $table->string('dept_url', 25)->nullable();
            $table->text('dept_desc')->nullable();
            $table->unsignedInteger('dept_owner')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
