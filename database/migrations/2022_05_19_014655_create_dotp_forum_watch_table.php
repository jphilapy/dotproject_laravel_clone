<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpForumWatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_forum_watch', function (Blueprint $table) {
            $table->unsignedInteger('watch_user')->default(0);
            $table->unsignedInteger('watch_forum')->nullable();
            $table->unsignedInteger('watch_topic')->nullable();
            
            $table->index(['watch_user', 'watch_forum'], 'idx_fw1');
            $table->index(['watch_user', 'watch_topic'], 'idx_fw2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_forum_watch');
    }
}
