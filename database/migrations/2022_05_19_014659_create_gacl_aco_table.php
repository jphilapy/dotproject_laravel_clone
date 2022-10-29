<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaclAcoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gacl_aco', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->string('section_value', 80)->default('0');
            $table->string('value', 80)->default('');
            $table->integer('order_value')->default(0);
            $table->string('name')->default('');
            $table->integer('hidden')->default(0)->index('gacl_hidden_aco');

            $table->unique(['section_value', 'value'], 'gacl_section_value_value_aco');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gacl_aco');
    }
}
