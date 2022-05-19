<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpForumMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_forum_messages', function (Blueprint $table) {
            $table->integer('message_id')->primary();
            $table->integer('message_forum')->default(0)->index('idx_mforum');
            $table->integer('message_parent')->default(0)->index('idx_mparent');
            $table->integer('message_author')->default(0);
            $table->integer('message_editor')->default(0);
            $table->string('message_title')->default('');
            $table->text('message_body')->nullable();
            $table->boolean('message_published')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_forum_messages');
    }
}
