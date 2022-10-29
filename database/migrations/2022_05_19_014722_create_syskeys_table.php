<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyskeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syskeys', function (Blueprint $table) {
            $table->increments('syskey_id');
            $table->string('syskey_name', 48)->default('')->unique();
            $table->string('syskey_label')->default('');
            $table->unsignedInteger('syskey_type')->default(0);
            $table->char('syskey_sep1', 2)->default('\n');
            $table->char('syskey_sep2', 2)->default('|');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('syskeys');
    }
}
