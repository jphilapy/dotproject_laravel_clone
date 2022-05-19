<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpFileFoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_file_folders', function (Blueprint $table) {
            $table->integer('file_folder_id')->primary();
            $table->integer('file_folder_parent')->default(0);
            $table->string('file_folder_name')->default('');
            $table->text('file_folder_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_file_folders');
    }
}
