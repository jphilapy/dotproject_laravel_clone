<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomFieldsStructTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_fields_struct', function (Blueprint $table) {
            $table->integer('field_id')->primary();
            $table->string('field_module', 30)->nullable();
            $table->string('field_page', 30)->nullable();
            $table->string('field_htmltype', 20)->nullable();
            $table->string('field_datatype', 20)->nullable();
            $table->integer('field_order')->nullable();
            $table->string('field_name', 100)->nullable();
            $table->string('field_extratags', 250)->nullable();
            $table->string('field_description', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custom_fields_struct');
    }
}
