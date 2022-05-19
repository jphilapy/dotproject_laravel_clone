<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpCustomFieldsListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_custom_fields_lists', function (Blueprint $table) {
            $table->integer('field_id')->nullable();
            $table->integer('list_option_id')->nullable();
            $table->string('list_value', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_custom_fields_lists');
    }
}
