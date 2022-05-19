<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_files', function (Blueprint $table) {
            $table->morphs('file');
            $table->string('file_real_filename')->default('');
            $table->integer('file_folder')->default(0);
            $table->integer('file_project')->default(0)->index('idx_file_project');
            $table->integer('file_task')->default(0)->index('idx_file_task');
            $table->string('file_name')->default('');
            $table->integer('file_parent')->default(0)->index('idx_file_parent');
            $table->text('file_description')->nullable();
            $table->integer('file_owner')->default(0);
            $table->dateTime('file_date')->nullable();
            $table->integer('file_size')->default(0);
            $table->float('file_version')->default(0);
            $table->string('file_icon', 20)->default('obj/');
            $table->integer('file_category')->default(0);
            $table->string('file_checkout')->default('');
            $table->text('file_co_reason')->nullable();
            $table->integer('file_version_id')->default(0)->index('idx_file_vid');
            
            $table->primary(['file_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_files');
    }
}
