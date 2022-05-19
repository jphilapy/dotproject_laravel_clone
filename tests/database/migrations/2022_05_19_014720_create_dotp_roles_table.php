<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_roles', function (Blueprint $table) {
            $table->increments('role_id');
            $table->string('role_name', 24)->default('');
            $table->string('role_description')->default('');
            $table->unsignedInteger('role_type')->default(0);
            $table->unsignedInteger('role_module')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_roles');
    }
}
