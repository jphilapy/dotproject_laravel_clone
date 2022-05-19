<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpDpversionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_dpversion', function (Blueprint $table) {
            $table->string('code_version', 10)->default('');
            $table->integer('db_version')->default(0);
            $table->date('last_db_update')->default('0000-00-00');
            $table->date('last_code_update')->default('0000-00-00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_dpversion');
    }
}
