<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpGaclGroupsAroMapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_gacl_groups_aro_map', function (Blueprint $table) {
            $table->integer('group_id')->default(0);
            $table->integer('aro_id')->default(0);
            
            $table->primary(['group_id', 'aro_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_gacl_groups_aro_map');
    }
}
