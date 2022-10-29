<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysvalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sysvals', function (Blueprint $table) {
            $table->increments('sysval_id');
            $table->unsignedInteger('sysval_key_id')->default(0);
            $table->string('sysval_title', 48)->default('')->unique('idx_sysval_title');
            $table->text('sysval_value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sysvals');
    }
}
