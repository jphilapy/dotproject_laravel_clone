<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_config', function (Blueprint $table) {
            $table->morphs('config');
            $table->string('config_name', 127)->default('')->unique('config_name');
            $table->string('config_value')->default('');
            $table->string('config_group')->default('');
            
            $table->primary(['config_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_config');
    }
}
