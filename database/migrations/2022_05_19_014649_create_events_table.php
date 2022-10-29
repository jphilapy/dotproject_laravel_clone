<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->integer('event_id')->primary();
            $table->string('event_title')->default('');
            $table->dateTime('event_start_date')->nullable()->index('id_esd');
            $table->dateTime('event_end_date')->nullable()->index('id_eed');
            $table->unsignedInteger('event_parent')->default(0)->index('id_evp');
            $table->text('event_description')->nullable();
            $table->unsignedInteger('event_times_recuring')->default(0);
            $table->unsignedInteger('event_recurs')->default(0);
            $table->unsignedInteger('event_remind')->default(0);
            $table->string('event_icon', 20)->default('obj/event');
            $table->integer('event_owner')->default(0)->index('idx_ev1');
            $table->integer('event_project')->default(0)->index('idx_ev2');
            $table->boolean('event_private')->default(0);
            $table->boolean('event_type')->default(0);
            $table->boolean('event_cwd')->default(0);
            $table->boolean('event_notify')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
