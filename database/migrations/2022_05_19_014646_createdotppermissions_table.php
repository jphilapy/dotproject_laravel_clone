<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotppermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotppermissions', function (Blueprint $table) {
            $table->integer('acl_id')->default(0);
            $table->string('user_id', 80)->default('');
            $table->string('section', 80)->default('');
            $table->string('axo', 80)->default('');
            $table->string('permission', 80)->default('');
            $table->integer('allow')->default(0);
            $table->integer('priority')->default(0);
            $table->integer('enabled')->default(0);

            $table->index(['user_id', 'section', 'permission', 'axo'], 'user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotpermissions');
    }
}
