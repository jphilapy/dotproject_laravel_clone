<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesIndexTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files_index', function (Blueprint $table) {
            $table->integer('file_id')->default(0);
            $table->string('word', 50)->default('')->index('idx_fwrd');
            $table->integer('word_placement')->default(0);

            $table->primary(['file_id', 'word', 'word_placement']);
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
        Schema::dropIfExists('files_index');
    }
}
