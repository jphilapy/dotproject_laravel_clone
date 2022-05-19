<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpCommonNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_common_notes', function (Blueprint $table) {
            $table->increments('note_id');
            $table->unsignedInteger('note_author')->default(0);
            $table->unsignedInteger('note_module')->default(0);
            $table->unsignedInteger('note_record_id')->default(0);
            $table->unsignedInteger('note_category')->default(0);
            $table->string('note_title', 100)->default('');
            $table->text('note_body');
            $table->dateTime('note_date')->default('0000-00-00 00:00:00');
            $table->float('note_hours')->default(0);
            $table->string('note_code', 8)->default('');
            $table->dateTime('note_created')->default('0000-00-00 00:00:00');
            $table->timestamp('note_modified')->nullable();
            $table->unsignedInteger('note_modified_by')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_common_notes');
    }
}
