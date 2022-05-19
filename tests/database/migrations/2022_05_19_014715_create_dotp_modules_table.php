<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_modules', function (Blueprint $table) {
            $table->morphs('mod');
            $table->string('mod_name', 64)->default('');
            $table->string('mod_directory', 64)->default('');
            $table->string('mod_version', 10)->default('');
            $table->string('mod_setup_class', 64)->default('');
            $table->unsignedInteger('mod_active')->default(0);
            $table->string('mod_ui_name', 20)->default('');
            $table->string('mod_ui_icon', 64)->default('');
            $table->boolean('mod_ui_order')->default(0);
            $table->unsignedInteger('mod_ui_active')->default(0);
            $table->string('mod_description')->default('');
            $table->char('permissions_item_table', 100)->nullable();
            $table->char('permissions_item_field', 100)->nullable();
            $table->char('permissions_item_label', 100)->nullable();
            
            $table->primary(['mod_id', 'mod_directory']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_modules');
    }
}
