<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_sessions', function (Blueprint $table) {
            $table->string('session_id', 60)->default('')->primary();
            $table->integer('session_user')->default(0);
            $table->longblob('session_data');
            $table->timestamp('session_updated')->nullable()->index('session_updated');
            $table->dateTime('session_created')->default('0000-00-00 00:00:00')->index('session_created');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_sessions');
    }
}
