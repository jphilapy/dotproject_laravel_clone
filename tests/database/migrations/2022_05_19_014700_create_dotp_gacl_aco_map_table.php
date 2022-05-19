<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpGaclAcoMapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_gacl_aco_map', function (Blueprint $table) {
            $table->integer('acl_id')->default(0);
            $table->string('section_value', 80)->default('0');
            $table->string('value', 80)->default('');
            
            $table->primary(['acl_id', 'section_value', 'value']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_gacl_aco_map');
    }
}
