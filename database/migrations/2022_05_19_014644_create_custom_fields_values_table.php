<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomFieldsValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_fields_values', function (Blueprint $table) {
            $table->integer('value_id')->nullable()->index('idx_cfv_id');
            $table->string('value_module', 30)->nullable();
            $table->integer('value_object_id')->nullable();
            $table->integer('value_field_id')->nullable();
            $table->string('value_charvalue', 250)->nullable();
            $table->integer('value_intvalue')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custom_fields_values');
    }
}
