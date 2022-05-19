<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_forums', function (Blueprint $table) {
            $table->integer('forum_id')->primary();
            $table->integer('forum_project')->default(0)->index('idx_fproject');
            $table->tinyInteger('forum_status')->default(-1)->index('forum_status');
            $table->integer('forum_owner')->default(0)->index('idx_fowner');
            $table->string('forum_name', 50)->default('');
            $table->dateTime('forum_create_date')->default('0000-00-00 00:00:00');
            $table->dateTime('forum_last_date')->default('0000-00-00 00:00:00');
            $table->unsignedInteger('forum_last_id')->default(0);
            $table->integer('forum_message_count')->default(0);
            $table->string('forum_description')->nullable();
            $table->integer('forum_moderated')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_forums');
    }
}
