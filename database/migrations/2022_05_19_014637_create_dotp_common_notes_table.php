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
            $table->float('note_hours')->default(0);
            $table->string('note_code', 8)->default('');
            $table->unsignedInteger('note_modified_by')->default(0);
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
        Schema::dropIfExists('dotp_common_notes');
    }
}
