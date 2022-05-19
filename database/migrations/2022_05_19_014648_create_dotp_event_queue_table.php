<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpEventQueueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_event_queue', function (Blueprint $table) {
            $table->morphs('queue');
            $table->integer('queue_start')->default(0);
            $table->integer('queue_repeat_interval')->default(0);
            $table->integer('queue_repeat_count')->default(0);
            $table->binary('queue_data');
            $table->string('queue_callback', 127)->default('');
            $table->integer('queue_owner')->default(0);
            $table->integer('queue_origin_id')->default(0)->index('queue_origin_id');
            $table->string('queue_module', 40)->default('')->index('queue_module');
            $table->integer('queue_batched')->default(0);

            $table->primary(['queue_id']);
            $table->index(['queue_batched', 'queue_start'], 'queue_start');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_event_queue');
    }
}
